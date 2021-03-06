<?php 
    //Create, read, update, delete
    class crud{
        private $db;
        //Konstruktor koji inicijalizuje privatnu varijablu na database konekciju
        function __construct($conn)
        {
            $this->db = $conn;

        }
        //Insert record u bazu
        public function insert($cname, $position,$city, $doa, $cmail, $notes,$astatus){
            try {
                $sql = "INSERT INTO application(company_name,position,contact_mail, city, doa, notes, status_id)
                         VALUES (:cname,:position,:cmail,:city,:doa,:notes,:astatus)";
                $stmt = $this->db->prepare($sql);      //this je db
                $stmt->bindparam(':cname',$cname);      //protiv sql injectiona 
                $stmt->bindparam(':position',$position);
                $stmt->bindparam(':cmail', $cmail);                
                $stmt->bindparam(':city',$city);
                $stmt->bindparam(':doa',$doa);
                $stmt->bindparam(':notes',$notes);
                $stmt->bindparam(':astatus',$astatus);

                $stmt->execute();
                return true;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        }

        public function getApplications(){
            $sql = "SELECT * FROM `application` a inner join status s on a.status_id = s.status_id";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getStatus(){
            $sql = "SELECT * FROM `status`";
            $result = $this->db->query($sql);
            return $result;
        }

        public function getApplicationDetails($id){
            $sql = "SELECT * FROM application a inner join status s on a.status_id = s.status_id 
                                                    where application_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();   //fetch record into one variable
            return $result;
        }

        public function editApplication($id,$cname, $position,$city, $doa, $cmail, $notes,$astatus){
            try{
            $sql = "UPDATE `application` SET 
                `company_name`=:cname,`position`=:position,
                `contact_mail`=:mail,`city`=:city,`doa`=:doa,`notes`=:notes,
                `status_id`=:astatus WHERE application_id=:id";

                $stmt = $this->db->prepare($sql);     
                $stmt->bindparam(':id', $id);
                $stmt->bindparam(':cname',$cname);     
                $stmt->bindparam(':position',$position);
                $stmt->bindparam(':cmail', $cmail);                
                $stmt->bindparam(':city',$city);
                $stmt->bindparam(':doa',$doa);
                $stmt->bindparam(':notes',$notes);
                $stmt->bindparam(':astatus',$astatus);

                $stmt->execute();
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function deleteApplication($id){
            try{
            $sql = "delete from application where application_id = :id";
            $stmt = $this->db->prepare($sql);
            $stmt-> bindparam(':id', $id);
            $stmt->execute(); 
            return true;
            }
            catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }
?>
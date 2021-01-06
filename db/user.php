<?php 
    class user{
        private $db;
        function __construct($conn){
            $this->db=$conn;
            
        }
        
        public function insertUser($username, $password){
            try {
                $result = $this->getUserByUsername($username);
                if($result['num'] > 0){
                    //Ako je korisnik vec postoji s tim username-om onda nista ne radi
                    return false;
                } else{
                $new_password = md5($password.$username);   //Enkripcija md5
                $sql = "INSERT INTO user(username,password) VALUES (:username, :password)";
                $stmt = $this->db->prepare($sql);      //this je db
                $stmt->bindparam(':username',$username);      //protiv sql injectiona 
                $stmt->bindparam(':password',$new_password);
                $stmt->execute();
                return true;
            }

            } catch (PDOException $e) {
                echo $e->getMessage();
                return false;
            }
        
        }
        
        public function getUser($username, $password){
            try{
            $sql = "SELECT * FROM user where username = :username AND password = :password";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->bindparam(':password', $password);
            $stmt->execute();
            $result = $stmt->fetch();  
            return $result;
            
            }
            catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }

        public function getUserByUsername($username){
            try{
            $sql = "SELECT count(*) as num from user where username = :username";
            $stmt = $this->db->prepare($sql);
            $stmt->bindparam(':username', $username);
            $stmt->execute();
            $result = $stmt->fetch();  
            return $result;
            
            }
            catch(PDOException $e){
                echo $e->getMessage();
                return false;
            }
        }
    }
?>
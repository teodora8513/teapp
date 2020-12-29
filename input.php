    <?php
        include 'includes/header.php';
        echo '<h1>Please enter your application</h1>';
        
    ?>
    <!--Labele i input polja za formu-->
    <label>Name of the company:</label>
    <input name = 'Name'><br/></input>
    <label>Position:</label>
    <input name = 'Position'><br/></input>
    <label>Company's website:</label>
    <input name = 'Website'><br/></input>
    <label>Contact mail:</label>
    <input name = 'Mail'><br/></input>
    <label>Application status:</label>
    <input name = 'Status'><br/></input>
    <label>Application date:</label>
    <input name = 'Date'><br/></input>
    <label>Notes:</label>
    <input name = 'Notes'><br/></input>

    <?php
        $companyName = "Proba";
        $position = "Praksa";
        $webAddress = "Adresa";
        $contactMail = "MAil";
        $status = "1";
        $applicationDate = date("d/m/Y");
        $notes ="Notes";
        //Verifikacija forme
        function verificate(){
            if(verificateCompanyName() && verificateMail() && verificatePosition() 
                && verificatePosition() && verificateStatus())
                return true;
            return false;

        }
        function verificateCompanyName(){
            if($companyName!=null && $companyName.is_string())
                return true;
        }
        function verificatePosition(){

        }
        function verificateMail(){

        }
        function verificateStatus(){

        }
    ?>
    

    <?php 
        require 'includes/footer.php';    
    ?>
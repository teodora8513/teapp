<?php
        $title = "Login";
        include 'includes/header.php';
        
        require_once 'db/conn.php';
        //Proveriti da li je forma submitovana preko POSTa
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $username = strtolower(trim($_POST['username']));
            $password = $_POST['password'];
            $new_password = md5($password.$username);
            //Sledecu liniju koda treba proveriti
           // $user = new user($pdo);
             
           $result = $user->getUser($username, $new_password);
            if(!$result){
                echo 'Password or username is inncorect';
            }
            else{
                //Pravljenje sesije
                $_SESSION['username'] = $username;
                $_SESSION['id']= $result['id'];
            header("Location: applications.php");
            }
        }
    ?>

<h1 class="text-center" ><?php echo $title ?></h1>

<form action ="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post"> <!--Reload this page to the post action on this page -->
    <table class="table table-sm">
        <tr>
            <td><label for="username">Username: *</label></td>
            <td><input type="text" name="username" id="username" class="form-control" 
            value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username'];?>"></td>
        </tr>
        <tr>
            <td><label for="password">Password: *</label></td>
            <td><input type="password" name="password" id="password" class="form-control"></td>
        </tr>
    </table>
    
    <input type="submit" value="Login" class="btn btn-primary"><br/>
    </form>

    <?php 
        include_once 'includes/footer.php';
    ?>
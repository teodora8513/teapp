
   
    <?php 
        $title = "Create user";
        include 'includes/header.php';
        echo ' <h1>Create a new user</h1>';
        //Novi korisnik forma
        $name;
        $surname;
        $username;
        $dateOfBirth;
        $tearmsAndConditions;
    ?>
    <form>
    <div class="form-group">
        <label for="userName">Name</label>
        <input type="text" class="form-control" id="userName" >
     </div>
    <div class="form-group">
        <label for="userSurname">Surname</label>
        <input type="text" class="form-control" id="userSurname" >
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="newMail" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" id="inputPassword" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
        <small id="passwordHelpInline" class="text-muted">
        Must be 8-20 characters long.
        </small>
    </div>
    <!--Provera sifre da li je isto-->   
    <div class="form-group">
        <label for="confirmPassword">Confirm password</label>
        <input type="password" id="confirmPassword" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
        <small id="passwordHelpInline" class="text-muted">
        Must match the password above.
        </small>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="tearms" required>
      <label class="form-check-label" for="tearms">
        Agree to terms and conditions
      </label>
    </div>
    <button type="button" class="btn btn-primary">CREATE</button>
    </form>

    <?php 
        require 'includes/footer.php';    
    ?>
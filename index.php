
    <?php 
        $title = "Home";
        include 'includes/header.php';
        echo '<h1>A place where you can note all your job / internship applications</h1>';
        require_once 'db/conn.php';
        //Login forma
        


    ?>
    <form>
         <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
        <small id="passwordHelpInline" class="text-muted">
        Must be 8-20 characters long.
    </small>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="rememberMe">
        <label class="form-check-label" for="rememberMe">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href= "createuser.php" type="createUser" class = "btn btn-secondary">Create an account</a>
    <a href=""></a>
    </form>

    <?php 
        require 'includes/footer.php';    
    ?>

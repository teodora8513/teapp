
    <?php 
        $title = "Home";
        include 'includes/header.php';
        echo '<h1>A place where you can note all your job / internship applications</h1>';
        //Login forma
        


    ?>
    <form>
         <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        <small id="passwordHelpInline" class="text-muted">
        Must be 8-20 characters long.
    </small>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href=""></a>
    </form>

    <?php 
        require 'includes/footer.php';    
    ?>

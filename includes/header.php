<?php 
    include_once 'includes/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <title>Teapp - <?php echo "$title"?></title>
</head>
<body>
    <div class = "container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="input.php">Teapp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link active" href="input.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="applications.php">View applications</a>
            
            </div>
            
            <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="login.php">Login <span class="sr-only">(current)</span></a>
           
            
            </div>
        </div>
    </nav>
    <h1>Welcome to Teapp!</h1>
   
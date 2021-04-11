<?php

include 'database.php';

$msg = '';
if(isset($_POST['submit'])){

    $fieldnames = ['username', 'password'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->loginmedewerker($_POST['username'], $_POST['password']);
    
    }else{
    
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Camping</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://www.w3schools.com/lib/w3.js"></script>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<body>
    <nav class="navbar sticky-top navbar-expand-sm bg-secondary navbar-dark">
        <a class="navbar-brand" href="index.html">
            <img src="Picture1.png" alt="logo" style="width:200px;">
        </a>
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="activiteiten.php">activiteiten</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="admin.php">login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="reservering.php">reserveren</a>
          </li>
        </ul>
    </nav>

      <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

<script type="text/javascript" src="jquery-1.11.3.min.js"></script>

<link rel="stylesheet" href="bootstrap.min.css">
<script src="bootstrap.min.js"></script>

<form method="post">
        <div id="mainsection">
            <div id="section1">
                <br>
                    <div class="login-block">
                        <h1>Administration Login</h1>
                        <input type="text" value="" placeholder="Username" name="username" />
                        <input type="password" value="" placeholder="Password" name="password" />
                        <button type="submit" name="submit" class="btn">Submit</button>
                    </div>

            
            </div>
        </div>

</form>


</body>
</html>
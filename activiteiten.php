<?php

include 'database.php';

$msg = '';
if(isset($_POST['submit'])){

    $fieldnames = ['username', 'keuze'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->insertActiviteit($_POST['username'], $_POST['keuze']);
        //yurr
    }else{
        //do something
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Activiteiten</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://www.w3schools.com/lib/w3.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
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
            <a class="nav-link " href="reservering.php">reserveren</a>
          </li>
        </ul>
      </nav>
        

<div id="slides" class="content">

  
  <img class="slides" src="fit3.jpg" width="100%">

  <img class="slides" src="fit.jpg" width="100%">

  <img class="slides" src="fit2.jpg" width="100%"> 
  <script>
    w3.slideshow(".slides", 3000);
  </script>
</div>

<div class= "header">  
    <h2> Activiteiten </h2>
    <p> Neem een kijkje naar de activiteiten!</p> 
</div>

<div class="row">

    <div class="column">
        <p>Mountainbiken!</p>
        <img src="mntbike.jpg" style="width: 50%">
        <p>Knutselen!</p>
        <img src="knutsel.jpg" style="width: 50%">
    </div>

    <div class="column">
        <p>Jeu de boule!</p>
        <img src="jeudeboule.jpg" style="width: 50%">
        <p>Water aerobics!</p>
        <img src="water.jpg" style="width: 50%">
    </div> 
    
</div>

    <form class= "form" method="POST" action="activiteiten.php">
        <div>
            <br><br><br>
          <label for="username"> &nbsp; Naam:</label> 
          <input type="text" name="username" placeholder="name" required
             minlength="2" maxlength="255" size="30">
                  <p>Kies een activiteit:</p>
                  <select id="kiesActiviteit" name="keuze" required>
                  <option value="" disabled selected>Kies activiteit</option>
                  <option value="Mountainbiken">Mountainbiken</option>
                  <option value="Knutselen">Knutselen</option>
                  <option value="Jeu de Boele wedstrijd">Jeu de Boele wedstrijd</option>
                  <option value="Water Aerobics">Water Aerobics</option>
                  </select><br><br>
              <button type="submit" name="submit" class="btn">Submit</button><br> <br> <br> <br> <br> <br>
    </form>



    
</body>
</html>
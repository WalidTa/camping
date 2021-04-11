<?php

include 'database.php';

$msg = '';
if(isset($_POST['submit'])){

    $fieldnames = ['username', 'adres', 'date', 'duur', 'keuze_verblijf', 'aantal_personen'];
    $error = false;

    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->insertreservering($_POST['username'], $_POST['adres'], $_POST['date'], $_POST['duur'], $_POST['keuze_verblijf'], $_POST['aantal_personen']);
        //yurr
    }else{
        //do something
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>Reserveren</title>
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
        

<div id="slides" class="content">

  
  <img class="slides" src="fit3.jpg" width="100%" height="100%">

  <img class="slides" src="fit.jpg" width="100%" height="100%">

  <img class="slides" src="fit2.jpg" width="100%" height="100%"> 
  <script>
    w3.slideshow(".slides", 3000);
  </script>

</div>

          <form class="formRes" method="post" action="reservering.php">
           <br> <div>
                <input type="text" name="username" placeholder="Naam" required/>
                <input type="text" name="adres" placeholder="Adres" required/> <br>
            </div>  <br>
            <div> 
                <input type="date" name="date" placeholder="Datum voor reservering" required/>
                <input type="number" name="duur" placeholder="Duur vakantie" required/> <br>
            </div> <br>
            <div>
                <select id="keuze_verblijf" name="keuze_verblijf" required>
                  <option value="">Kies verblijf</option>
                  <option value="Caravan">Caravan</option>
                  <option value="Tent">Tent</option>
                </select>
                <input type="number" name="aantal_personen" placeholder="Aantal personen" required/>
              </div> <br>
                <button type="submit" name="submit" class="btn">Reserveer</button><br> <br> <br>
        </form>




</body>
</html>
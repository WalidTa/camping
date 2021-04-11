<?php

include 'database.php';

$DB = new database();

$activiteiten = $DB->getAllActivities();
$reservering = $DB->getAllReseveringen();


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
            <a class="nav-link" href="activiteiten.php"> activiteiten</a>
          </li> 
          <li class="nav-item active">
            <a class="nav-link" href="admin.php">login</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="reservering.php"> reserveren</a>
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


      <h3> Activiteiten</h3>
        <table class="tableActiviteit">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Activiteit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($activiteiten as $activiteit):?>
                        <tr>
                            <th scope="row"><?php echo $activiteit["ID"];?></th> 
                            <td><?php echo $activiteit["naam"];?></td>
                            <td><?php echo $activiteit["keuzeactiviteit"];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </table>
<br><br>
        <h3> Reserveringen</h3>
        <table class="reserveringOverzicht">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Naam</th>
                        <th scope="col">Adres</th>
                        <th scope="col">Datum</th>
                        <th scope="col">Duur(Dagen)</th>
                        <th scope="col">Verblijf</th>
                        <th scope="col">Aantal personen</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach($reservering as $reserveren):?>
                        <tr>
                            <th scope="row"><?php echo $reserveren["ID"];?></th>
                            <td><?php echo $reserveren["naam"];?></td>
                            <td><?php echo $reserveren["adres"];?></td>
                            <td><?php echo $reserveren["datum"];?></td>
                            <td><?php echo $reserveren["duur"];?></td>
                            <td><?php echo $reserveren["keuze_verblijf"];?></td>
                            <td><?php echo $reserveren["aantal_personen"];?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> <br><br><br>







</home>
</html>

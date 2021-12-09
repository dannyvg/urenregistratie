<?php
if (!isset($_SESSION['loggedin'])) {
    header('Location: inloggen');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/style-home.css">

    <title>Home</title>
</head>
<body>

<?php
include 'menu.php';
?>

<div class="welkom">
  <?php 
  echo "Welkom, ";
  echo  $_SESSION['Voornaam'];
  echo  " ";
  echo  $_SESSION['Tussenvoegsel'];
  echo  $_SESSION['Achternaam'];
  ?>
  
</div>
<br>
<form action="index.php" method="post">
        <div class="container" style="text-align: center;">

          <?php
          echo '<select name="Dropdown">';
            foreach ($dropp as $p) {
              echo '<option value="'.$p['idomschrijving'].'">'.$p['Naam'].'</option>';
            }
   
          echo '</select>';
  //   foreach ($dropp as $p) {
  //     echo $p['Naam'] . '<br>';
  // }
          ?>
            <br>
            <input type="hidden" name="form" value='1'>

            <button type="submit">Inklokken</button>
        </div>
</form>
    
</body>
</html>
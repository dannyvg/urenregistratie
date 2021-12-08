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

<nav role="navigation">
  <div id="menuToggle">
    <input type="checkbox" class="box" />
    <span></span>
    <span></span>
    <span></span>
    
    <ul id="menu">
      <a href="#"><li>Home</li></a>
      <a href="#"><li>About</li></a>
      <a href="#"><li>Info</li></a>
      <a href="#"><li>Contact</li></a>
      <a href="#" target="_blank"><li>Show me more</li></a>
    </ul>
  </div>
</nav>

<div class="btn-uitlog">
  <a href="http://localhost/Urenregistratie/uitloggen">Uitloggen</a>
</div>  

<div class="welkom">
  <?php 
  echo "Welkom, ";
  echo  $_SESSION['Voornaam'];
  echo  " ";
  echo  $_SESSION['Tussenvoegsel'];
  echo  $_SESSION['Achternaam'];
  ?>
</div>
    
</body>
</html>
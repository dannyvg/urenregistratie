<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/style-reg.css">
    <title>registreren</title>
</head>
<body>
    <div class="container">
        <div class="log"> 
        <form action="index.php" method="post">
           <div class="text">registreren</div> 
            <input type="text" placeholder="Email" name="email" required>
            <input type="password" placeholder="Wachtwoord" name="psw" required>
            <input type="text" placeholder="Voornaam" name="Voor" required>
            <input type="text" placeholder="Tussenvoegsel" name="Tussen" required>
            <input type="text" placeholder="Achternaam" name="Achter" required>

            <input type="hidden" name="form" value='2'>
        
    
            <button type="submit">registreren</button>
        </form>
    </div>

    <div class="bg">
        
    </div>
</body>
</html>

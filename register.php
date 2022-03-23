<?php require_once('connection.php');?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="register.css">
</head>
<body>

    <form action="register_scr.php" method="POST" class="container" >          
          <h1>Registrácia</h1>
          <label for="username"><b>Meno</b></label>
          <br>
          <input type="text" placeholder="Enter Username" name="username" id="username" required>
          <p>
          <label for="surname"><b>Priezvisko</b></label>
          <br>
          <input type="text" placeholder="Enter Surname" name="surname" id="surname" required>
          <p>
          <label for="email"><b>Email</b></label>
          <br>
          <input type="mail" placeholder="Enter Email" name="email" id="email" required>
          <p>
          <label for="password"><b>Heslo</b></label>
          <br>
          <input type="password" placeholder="Enter Password" name="password" id="password" required>
          <p>
          <label for="password-repeat"><b>Zopakuj heslo </b></label>
          <br>
          <input type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat" required>
 
      
        <p class="idk">
          <button type="submit" class="registerbtn">Registruj</button>
        </p>

        <p>
        <div class="containerregis">
         Maš už účet? <a href="login.php">Prihlas sa tu.</a></p>
        </div>
      </form>
</body>
</html>
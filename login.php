<?php require_once('connection.php');?>

<!DOCTYPE html>
<html>
<head>
<title>Login</title>
  <link rel="stylesheet" href="login.css" http-equip="Content-Type" >
</head>
<body>

        <form method="POST" class="formular" action="login_scr.php" method="POST">
          <h1>Prihlásenie</h1>
          <label for="uname"><b>Meno</b></label>
          <br>
          <input type="text" placeholder="Enter Username" id="username" name="username" required>
          <p>
          <label for="password"><b>Heslo</b></label>
          <br>
          <input type="password" placeholder="Enter Password" id="password" name="password" required>
          <p>
          

          <div class = login>
          <button type="submit" id = "login" value="login">Prihlásiť</button>
        </div>

        <div class="containerlogin">
          <p>Vytvoriť učet. <a href="register.php">Registruj.</a></p>
        </div>
        </form>
      
    </body>
</html>
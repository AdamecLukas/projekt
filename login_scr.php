<?php
    require('./connection.php');
    $meno  = $_POST["username"];
    $hash = $_POST["password"];

        $sql = "SELECT * FROM users WHERE Meno = '$meno' AND Heslo = '$hash'";
        $result = mysqli_query($link,$sql );

        if ($meno == "" || $hash == ""){
            echo "Nekompletné údaje";
        }
        else if ($result->num_rows > 0){
            $row = mysqli_fetch_assoc($result);
            $_SESSION['Email'] = $row['Meno'];
            echo "Vitajte na stránke.";
        }
        else {
            echo "Nesprávne meno alebo heslo";
        }

        if($result->num_rows==1){
            session_start();
            $_SESSION["username"] = $user;

            header("Location: /index.php");
        }
        else{
            header("Location: /Login.php?message=zadal si zle meno alebo heslo");
        }
?>
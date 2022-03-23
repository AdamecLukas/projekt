<?php
require_once("connection.php");
$isEmpty = false;
$hasPasswordCertainLength = true;
$hasPasswordAtLeastOneNumber = true;
$passwordAreSame = true;
$usernameOrEmailAlreadyExists = false;

    $meno =  $_POST['username'];
    $priezvisko =  $_POST['surname'];
    $email = $_POST['email'];
    $heslo =  $_POST['password'];


    if(empty($_POST["email"])){
        $isEmpty = true;
    }
    if(empty($_POST["username"])){
        $isEmpty = true;
    }
    if(empty($_POST["surname"])){
        $isEmpty = true;
    }
    if(empty($_POST["password"])){
        $isEmpty = true;
    }
    if(empty($_POST["password-repeat"])){
        $isEmpty = true;
    }
    if($isEmpty == true){

        echo "Something is missing ";
    }
    else{

    }
    if (!preg_match('@[0-9]@', $heslo)) {
        $hasPasswordAtLeastOneNumber = false;
        echo "Heslo musi obsahovat aspon 1 cislo. " . "<br>";
    }
    if (($_POST["password"]) == ($_POST["password-repeat"]))
    {
        $passwordAreSame = true;
    }
    else{
        $passwordAreSame = false;
        echo "Passwords are not matching " . "<br>";

    }

    if(strlen($heslo) < 5){
        $hasPasswordCertainLength = false;
        echo "Heslo musí obsahovat aspon 5 charakterov " . "<br>";
    } 
    else{
        $hasPasswordCertainLength = true;
    }
    $sql_u = "SELECT * FROM users WHERE Meno='$meno'";
    $sql_e = "SELECT * FROM users WHERE email='$email'";
    $res_u = mysqli_query($link, $sql_u);
    $res_e = mysqli_query($link, $sql_e);

    if (mysqli_num_rows($res_u) > 0) {
        $usernameOrEmailAlreadyExists = true;
        echo "Username already exist " . "<br>";
    }    
    if(mysqli_num_rows($res_e) > 0){
        $usernameOrEmailAlreadyExists = true;
        echo "Email is already used " . "<br>"; 
    }


    if($isEmpty == false && $hasPasswordCertainLength == true && $hasPasswordAtLeastOneNumber == true && $passwordAreSame == true  && $usernameOrEmailAlreadyExists == false){
        $hash = password_hash($heslo, PASSWORD_BCRYPT);
    

            $sql = "INSERT INTO users (Email, Meno, Priezvisko, Heslo) VALUES ('$email', '$meno','$priezvisko','$hash')";

            if ($link->query($sql) === TRUE) {
                header('Location: login.php');
            }
            else {
                echo "chyba " . "<br>";
            }
            
            $link->close();
            
        }
        else{
            echo "chyba " . "<br>"; 

        }


  

?>
<?php 

    session_start();

    function isuserLoggedin(){
        return $_SESSION["isLoggedin"];

    }

    $isuserLoggedin = isuserLoggedin();


?>







<!-- if(isset($_SESSION["username"]) && strlen($_SESSION["username"]) > 0) {
    header("Location: profile.php");
    exit();
} else {
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["username"]) && isset($_POST["password"])) {
            if(strlen($_POST["password"]) == 7) {
                $_SESSION["username"] = $_POST["username"];
                header("Location: profile.php");
                exit();
            } 
        }
    }
}


 ?> -->

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Document</title>
 </head>
 <body>
    <?php
    if($isuserLoggedin){
    ?>
    <h1>Welcome user</h1>
    <a href="logout.php">Logout</a>
    <?php  
    } ?>
    <form action="validate.php" method="POST">
        USERNAME: <input type="text" name="username"><br>
        PASSWORD: <input type="text" name="password"><br>
        <button>Submit</button>
    </form>
 </body>
 </html>







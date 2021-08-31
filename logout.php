
<?php
 session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["password"]);
    header("Location:login.php"); // Redirecting To Home Page
}
?>
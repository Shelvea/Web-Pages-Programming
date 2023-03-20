<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    session_unset();// remove all session variables
    session_destroy();// destroy the session
    header("Location: 0316_LoginPage_A1093343.php");
    ?>
</body>
</html>
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<style>
h1
{
    text-align: center;
}
</style>
<body>

<h1>This is Student Page</h1>
<?php

if(isset($_SESSION['login']))
{
    if($_SESSION['login']=="Student")
    {
        echo "<center>Student login successful</center>";
    }
}

?>
<a href="0316_LogoutPage_A1093343.php">Log out</a>

</body>
</html>
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

<h1>This is President Page</h1>

<?php    

    if(isset($_SESSION['login']))
    {
    
    if($_SESSION['login']=="President")
    {
        echo "<center>President login successful</center>";
    }
    
    }
?>

<br><a href="0316_TeacherPage_A1093343.php">Teacher Page<a><br>
<a href="0316_LogoutPage_A1093343.php">Log out</a>

</body>
</html>
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
<h1>This is Teacher Page</h1>

<?php
if(isset($_SESSION['login']))
{    
    if($_SESSION['login']=="Teacher")
    {
        echo "<center>Teacher login successful</center>";
?>
    <br><a href="0316_StudentPage_A1093343.php">Student Page</a></br>
<?php        
    }
}    
?>


<a href="0316_LogoutPage_A1093343.php">Log out</a>
</body>
</html>
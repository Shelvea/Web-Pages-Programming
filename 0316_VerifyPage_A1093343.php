<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php

$PresidentName = "President";
$PresidentPwd = "President123";
$TeacherName = "Teacher";
$TeacherPwd = "Teacher123";
$StudentName = "Student";
$StudentPwd = "Student123";

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

if($Username==$PresidentName && $Password==$PresidentPwd)
{
    $_SESSION['login'] = "President";
    header("Location: 0316_PresidentPage.php");
}
else if($Username==$TeacherName && $Password==$TeacherPwd)
{
    $_SESSION['login'] = "Teacher";
    header("Location: 0316_TeacherPage.php");
}
else if($Username==$StudentName && $Password==$StudentPwd)
{
    $_SESSION['login'] = "Student";
    header("Location: 0316_StudentPage.php");
}
else
{    
    header("Location: 0316_FailPage.php");
}
}
?>

</body>
</html>
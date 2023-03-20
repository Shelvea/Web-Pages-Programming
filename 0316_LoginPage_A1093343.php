<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript">
            function preventBack(){window.history.forward()};
            setTimeout("preventBack()",0);
            window.onunload=function(){null;}
        </script>
    </head>
<body>
President Username = President<br>
President Password = President123<br>
<br>
Teacher Username = Teacher<br>
Teacher Password = Teacher123<br>
<br>
Student Username = Student<br>
Student Password = Student123<br>
<br>
Please select one role:  
<br><form action="0316_VerifyPage.php" method="post">
Username : <input type="text" name="Username"><br>
Password : <input type="text" name="Password"><br><br>
<input type="submit" value="submit">
<input type="reset" value="reset">
</form>
</body>
</html>

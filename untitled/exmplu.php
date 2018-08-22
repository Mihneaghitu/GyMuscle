<!DOCTYPE html>
<html>
<head>
    <title>Welcome to php!</title>
</head>
<body>
   <form action="exmplu.php" method="post">
   Username: <input type="text" name="username"><br/>
       Password: <input type="password" name="password"><br/>
       <input type="submit">
   </form>

</body>
</html>
<?php
//$username=$_POST["username"];
//$password=$_POST["password"];
//echo 'Welcome '. $username . ' !'."<br/>";
//echo  'Your password is '. $password . ' !'."<br/>";
echo $_SERVER["PHP_SELF"];
?>*/
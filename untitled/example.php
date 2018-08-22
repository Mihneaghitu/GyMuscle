<!DOCTYPE html>
<html>
<head>
    <title>Welcome to php!</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
    Username: <input type="text" name="username"><br/>
    Password: <input type="password" name="password"><br/>
    <input type="submit">
</form>

</body>
</html>
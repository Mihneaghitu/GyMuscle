<?php $servername = "localhost";
$username = "root";
$password = "";
$dbname = "ff_17";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   ?>

    <html>
    <title>
        <link rel="stylesheet" type="text/css" href="sign_up.css">

    </title>
    <body>
    <form method="post">
        <!-- input username and password -->
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit">
    </form>

    </body>
    </html>



<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
        if(empty($_POST['username']))
        {
            $username_error="Username is required";
        }
    if(empty($_POST['password']))
    {
        $password_error="Password is required";
    }
}
$username=$_POST['username'];
$password=$_POST['password'];


$sql = "INSERT INTO users(username, password) VALUES('$username', '$password')"; //insert "person" into database
$sqli="SELECT * FROM users WHERE username='". $username."'";
if(query($sqli))
{
    echo "Username already used";
}

if ($conn->query($sql) === TRUE) /*if the query finds person in database($sql)*/  {
    echo "New record created successfully";  //aprove registration
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
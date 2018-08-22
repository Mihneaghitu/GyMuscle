<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gymuscle";


// Create connection\
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['registerbtn'])){
   // $username = mysqli_real_escape_string($conn, $_POST['username']);
   // $email = mysqli_real_escape_string($conn, $_POST['email']);

    $username = mysqli_real_escape_string($conn, $_GET['username']);
    $email= mysqli_real_escape_string($conn, $_GET['email']);
    $password = mysqli_real_escape_string($conn,$_GET['password']);
    $password2=mysqli_real_escape_string($conn,$_GET['password2']);


    if($password2===$password) {
        $password = md5($password);
        $sql = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
        mysqli_query($conn,$sql);
        $_SESSION['message']="You are now logged in";
        $_SESSION['username']=$username;
        header("location:index.php");
    }
    else{
        echo "The two password do not match!";
    }



}

?>

    <html>
    <head>
        <link rel="stylesheet" type="text/css" href="register.css">
    <title>
        lol

    </title>
    </head>
    <body>
    <form method="get" action="register.php">
        <!-- input username and password -->

        <table>
            <tr>
                <td><label>Username:</label></td>
                <td>
                        <input type="text" title="un" name="username" class="textInput" required>
                    </td>
            </tr>
            <tr>
                <td><label>Email:</label></td>
                <td>
                        <input title="em" type="email" name="email" class="textInput" required>
                </td>
            </tr>
            <tr>
                <td><label>Password:</label></td>
                <td>
                        <input title="pw" type="password" name="password" class="textInput" required>
                </td>
            </tr>
            <tr>
                <td><label>Confirm Password:</label></td>
                <td>
                    <input title="pw" type="password" name="password2" class="textInput" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="registerbtn" value="Register" required></td>
            </tr>

        </table>
    </form>

    </body>
    </html>






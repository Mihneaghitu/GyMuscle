<?php
/*    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ff17";

// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }*/
require_once("connection.php");

    $sql = "SELECT id, nume FROM user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<h1>" . "id: " . $row["id"] . " - Name: " . $row["nume"] . "</h1><br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
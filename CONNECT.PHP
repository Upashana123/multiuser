<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_ejob";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn) {
    //echo "Connected";
} else {
    echo "Not Connected";
}

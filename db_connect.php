<?php
$servername = "localhost";
$username = "root";
$dbname = "og_bomber_server";
$passsword = "";
$conn = new mysqli($servername,$username,$passsword,$dbname);
if ($conn->connect_error) {
 die('Connection failed: ' . $conn->connect_error);
}
// echo 'Connected Successfully';
?>

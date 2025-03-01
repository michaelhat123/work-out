<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'students_ims';
$conn = new mysqli($servername, $username, $password, $database);
if (!$conn) {
    echo 'conection failed!!';
}else {
    echo 'connection successful';
}
?>

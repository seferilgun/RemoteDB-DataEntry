<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];

$sql = "INSERT INTO users (first_name, last_name, email) VALUES ('$firstname', '$lastname', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "Veri başarıyla eklendi!";
} else {
    echo "Veri ekleme hatası: " . $conn->error;
}

$conn->close();
?>

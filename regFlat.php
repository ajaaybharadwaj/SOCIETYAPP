<?php

// Database connection configuration
$host = 'localhost';
$dbname = 'sidharta';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}

// Flat Owner Registration (register.php)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $flatNumber = $_POST['flatNumber'];
    $ownerName = $_POST['ownerName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];

    try {
        $stmt = $pdo->prepare("INSERT INTO flats (flat_number, owner_name, phone_number, email) VALUES (?, ?, ?, ?)");
        $stmt->execute([$flatNumber, $ownerName, $phoneNumber, $email]);

        echo "Registration successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>


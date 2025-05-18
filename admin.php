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
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
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

// Admin - Flat Details and Maintenance Update (admin.php)

// Fetch all flat details
try {
    $stmt = $pdo->query("SELECT * FROM flats");
    $flats = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    $flats = []; //ensure $flats is always defined, even on error.
}

// Maintenance update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['updateMaintenance'])) {
    $flatNumber = $_POST['flatNumber'];
    $jan = $_POST['jan'];

    try {
        $stmt = $pdo->prepare("INSERT INTO maintenance (flat_number, jan) VALUES (?, ?) ON DUPLICATE KEY UPDATE jan = ?");
        $stmt->execute([$flatNumber, $jan, $jan]);

        echo "Maintenance updated!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
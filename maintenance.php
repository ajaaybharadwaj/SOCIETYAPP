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


// Admin - Flat Details and Maintenance Update (admin.php)

// Fetch all flat details
try {
    $stmt = $pdo->query("SELECT * FROM flats");
    $flats = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    $flats = []; //ensure $flats is always defined, even on error.
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIDHARTA Apartment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">

  <link href="./css/style.css" rel="stylesheet">
</head>
<body>



  <div class="progress-line bg-warning py-1 w-100 position-fixed top-0"></div>

  <header class="sticky-top bg-light" id="header">
    <div class="header border-bottom border-secondary-subtle py-2">
      <div class="container">
      
		
		 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"> <div class="logo">
              <a href="" class="text-dark fw-bold text-decoration-none fs-3">
<!--                 <img src="" alt=""> -->
                SIDHARTA<span class="text-warning">Apartment</span>
              </a>
            </div></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
     
	   <li class="nav-item"><a href="#about" class="nav-link text-warning">Flat Details</a></li>
                <li class="nav-item"><a href="#project" class="nav-link text-warning">Society Committe</a></li>
                <li class="nav-item"><a href="maintenance.php" class="nav-link text-warning">Society Maintenance</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link text-warning">Contact</a></li>
   
      
    </ul>
   
  </div>
</nav>
		
		
      </div>
    </div>
  </header>
  
  <body>
  <div class='maintenancePage'>
  <div class='container'>
    <h1>Flat Details</h1>
   
<table class='table-responsive'>
            <thead>
                <tr>
                    <th>Flat Number</th>
                    <th>Owner Name</th>
					<th>Phone No</th>
                    <th>January</th>
                    <th>February</th>
					<th>March</th>
					<th>April</th>
					<th>May</th>
					<th>June</th>
					<th>July</th>
					<th>August</th>
					<th>September</th>
					<th>October</th>
					<th>November</th>
					<th>December</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flats as $flat): ?>
                    <tr>
                        <td><?php echo $flat['flat_number']; ?></td>
                        <td><?php echo $flat['owner_name']; ?></td>
						 <td><?php echo $flat['phone_number']; ?></td>
                        <td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['jan'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['feb'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['mar'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['apr'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['may'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['jun'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['jul'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['aug'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['sep'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['oct'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['nov'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
						<td><input type="number" name="jan" readonly=true value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['december'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
                       
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
   </div>
   </div>
   <?php include('footer.php'); ?>
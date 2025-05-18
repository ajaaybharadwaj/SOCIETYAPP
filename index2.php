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
    $feb = $_POST['feb'];
    $mar = $_POST['mar'];
    $apr = $_POST['apr'];
    $may = $_POST['may'];
    $jun = $_POST['jun'];
    $jul = $_POST['jul'];
    $aug = $_POST['aug'];
    $sep = $_POST['sep'];
    $oct = $_POST['oct'];
    $nov = $_POST['nov'];
    $dec = $_POST['dec'];

    try {
        $stmt = $pdo->prepare("INSERT INTO maintenance (flat_number, jan, feb, mar, apr, may, jun, jul, aug, sep, oct, nov, dec) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE jan = ?, feb = ?, mar = ?, apr = ?, may = ?, jun = ?, jul = ?, aug = ?, sep = ?, oct = ?, nov = ?, dec = ?");
        $stmt->execute([$flatNumber, $jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec, $jan, $feb, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec]);

        echo "Maintenance updated!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}



function getMaintenanceMonths($pdo, $flatNumber) {
    try {
        $stmt = $pdo->prepare("SELECT * FROM maintenance WHERE flat_number = ?");
        $stmt->execute([$flatNumber]);
        $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($maintenance) {
            $months = [
                'jan' => $maintenance['jan'] ?? 0,
                'feb' => $maintenance['feb'] ?? 0,
                'mar' => $maintenance['mar'] ?? 0,
                'apr' => $maintenance['apr'] ?? 0,
                'may' => $maintenance['may'] ?? 0,
                'jun' => $maintenance['jun'] ?? 0,
                'jul' => $maintenance['jul'] ?? 0,
                'aug' => $maintenance['aug'] ?? 0,
                'sep' => $maintenance['sep'] ?? 0,
                'oct' => $maintenance['oct'] ?? 0,
                'nov' => $maintenance['nov'] ?? 0,
                'dec' => $maintenance['dec'] ?? 0,
            ];
            return $months;
        } else {
            return []; // Return empty array if no records found
        }

    } catch (PDOException $e) {
        return []; // Return empty array on error
    }
}

// Example usage (replace with your actual flat number):
$flatNumberToDisplay = '101';
$maintenanceMonths = getMaintenanceMonths($pdo, $flatNumberToDisplay);


 $stmt1 = $pdo->prepare("SELECT flat_number FROM flats");
        $stmt1->execute();
        $flt = $stmt1->fetch(PDO::FETCH_ASSOC);
		
		//print_r($flt);

?>

<!DOCTYPE html>
<html lang="en">
<head><title>Flat Registration</title></head>
<body>
    <form method="POST" action="register.php">
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head><title>Admin Panel</title></head>
<body>


        <label for="monthSelect">Select Flat:</label>
        <select  onchange="updateAmount()">
            <?php foreach ($maintenanceMonths as $month => $amount): ?>
                <option value="<?php echo $amount; ?>"><?php echo ucfirst($month); ?></option>
            <?php endforeach; ?>
        </select>
 
	
	
	<?php if (!empty($maintenanceMonths)): ?>
        <label for="monthSelect">Select Month:</label>
        <select id="monthSelect" onchange="updateAmount()">
            <?php foreach ($maintenanceMonths as $month => $amount): ?>
                <option value="<?php echo $amount; ?>"><?php echo ucfirst($month); ?></option>
            <?php endforeach; ?>
        </select>
    <?php else: ?>
	
	 <script>
            function updateAmount() {
                const selectElement = document.getElementById("monthSelect");
                const amountDisplay = document.getElementById("amountDisplay");
                const selectedOption = selectElement.options[selectElement.selectedIndex];
                const selectedAmount = selectedOption.value;

                amountDisplay.value = selectedAmount;
            }
            //call update amount on page load to set initial value.
            updateAmount();
        </script>
        <p>No maintenance records found for Flat Number: <?php echo $flatNumberToDisplay; ?></p>
    <?php endif; ?>
    <form method="POST" action="admin.php">
        <table>
            <thead>
                <tr>
                    <th>Flat Number</th>
                    <th>Owner Name</th>
                    <th>feb</th>
                    <th>Update</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($flats as $flat): ?>
                    <tr>
                        <td><?php echo $flat['flat_number']; ?></td>
                        <td><?php echo $flat['owner_name']; ?></td>
                        <td><input type="number" name="jan" value="<?php
                        try{
                          $stmt = $pdo->prepare("SELECT * FROM maintenance where flat_number = ?");
                          $stmt->execute([$flat['flat_number']]);
                          $maintenance = $stmt->fetch(PDO::FETCH_ASSOC);
                          echo $maintenance['jan'] ?? 0;
                        } catch (PDOException $e){
                          echo 0;
                        }
                        ?>"></td>
                        <td><button type="submit" name="updateMaintenance" value="1">Update</button>
                        <input type="hidden" name="flatNumber" value="<?php echo $flat['flat_number']; ?>">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </form>
	
	
	
	
	
	
	
	
	
	
	 <?php if (!empty($maintenanceMonths)): ?>
       
 <input type="text" id="amountDisplay" readonly>
      
       

        <script>
            function updateAmount() {
                const selectElement = document.getElementById("monthSelect");
                const amountDisplay = document.getElementById("amountDisplay");
                const selectedOption = selectElement.options[selectElement.selectedIndex];
                const selectedAmount = selectedOption.value;

                amountDisplay.value = selectedAmount;
				
            }
            //call update amount on page load to set initial value.
            updateAmount();
        </script>
    <?php else: ?>
        <p>No maintenance records found for Flat Number: <?php echo $flatNumberToDisplay; ?></p>
    <?php endif; ?>
	
	
</body>
</html>



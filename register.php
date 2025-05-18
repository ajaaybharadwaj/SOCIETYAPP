<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flat Owner Registration</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 20px;
        }
        form {
            max-width: 400px;
            margin: auto;
        }
        label, input {
            display: block;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
    </style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</head>
<body>

<a href='register.php'>Register</a>
<a href='maintenance.php'>Maintenance</a>
<a href='index2.php'>Admin</a>
    <h1>Flat Owner Registration</h1>
    <form id="registrationForm">
        <label for="flatNumber">Flat Number:</label>
        <input type="text" id="flatNumber" name="flatNumber" required>

        <label for="ownerName">Owner Name:</label>
        <input type="text" id="ownerName" name="ownerName" required>

        <label for="phoneNumber">Phone Number:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email">

        <input type="submit" value="Register">
    </form>

    <script>
        document.getElementById('registrationForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(this);
            const flatNumber = formData.get('flatNumber');
            const ownerName = formData.get('ownerName');
            const phoneNumber = formData.get('phoneNumber');
            const email = formData.get('email');

            console.log("Flat Number:", flatNumber);
            console.log("Owner Name:", ownerName);
            console.log("Phone Number:", phoneNumber);
            console.log("Email:", email);
 $.ajax({
        type: "POST",
        url: "regFlat.php",
        data: {flatNumber:flatNumber,ownerName:ownerName,phoneNumber:phoneNumber,email:email},
        success: function(data) {
            alert(data);
           
        }
    });


            alert("Registration successful! (Check console for data)");
            // In a real application, you would send this data to a server.
        });
    </script>
</body>
</html>
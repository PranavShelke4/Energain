<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
    <script>
		function showAlert(message) {
			alert(message);
		}
	</script>
</head>
<body>
	<h1>Signup Page</h1>
	<?php
		require_once('./db_connect.php');

		if(isset($_POST['submit'])) {
			// Retrieve form data
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$age = $_POST['age'];
			$number = $_POST['number'];
			$gender = $_POST['gender'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];

			// Validate form data (you can add your own validation rules here)
			if(empty($fname) || empty($lname) || empty($age) || empty($number) || empty($gender) || empty($address) || empty($email) || empty($password) || empty($cpassword)) {
				echo "All fields are required.";
			} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "Invalid email address.";
			} elseif($password !== $cpassword) {
				echo "Passwords do not match.";
			} else {
				// Check if email address already exists
				$sql = "SELECT * FROM users WHERE email = '$email'";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) > 0) {
					// Email address already exists, display alert
					echo "<script>showAlert('Email address already exists.');</script>";
				} else {
					// Insert user data into database
					$meterid = uniqid(); // Generate unique ID for meterid
					$sql = "INSERT INTO users (meterid, fname, lname, age, number, gender, address, email, password) VALUES ('$meterid', '$fname', '$lname', '$age', '$number', '$gender', '$address', '$email', '$password')";
					if(mysqli_query($conn, $sql)) {
                        header('Location: login.php');
						exit();
					} else {
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        echo "<script>showAlert('Signup unsuccessful!');</script>";
					}
				}
		}

        }

		// Close database connection
		mysqli_close($conn);
	?>
	<form method="POST" action="">
		<label>First Name:</label><br>
		<input type="text" name="fname"><br>
		<label>Last Name:</label><br>
		<input type="text" name="lname"><br>
		<label>Age:</label><br>
		<input type="number" name="age"><br>
		<label>Phone Number:</label><br>
		<input type="tel" name="number"><br>
		<label>Gender:</label><br>
		<input type="radio" name="gender" value="male"> Male
		<input type="radio" name="gender" value="female"> Female
		<input type="radio" name="gender" value="other"> Other<br>
		<label>Address:</label><br>
		<textarea name="address"></textarea><br>
		<label>Email:</label><br>
		<input type="email" name="email"><br>
		<label>Password:</label><br>
		<input type="password" name="password"><br>
		<label>Confirm Password:</label><br>
		<input type="password" name="cpassword"><br>
		<input type="submit" name="submit" value="Signup">
	</form>
    <p>Alrady have an account? <a href="login.php">Login here</a>.</p>
</body>
<script src="./script/script.js" async defer></script>
</html>

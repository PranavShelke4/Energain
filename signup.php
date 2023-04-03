<!DOCTYPE html>
<html>

<head>
    <title>Signup Page</title>
    <link rel="stylesheet" href="./style/signupPage.css" />
    <script>
    function showAlert(message) {
        alert(message);
    }
    </script>
</head>


<body>
    <h1> </h1>
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
    <div class="row">
        <div class="col-md-12">
            <form action="" method="POST">
                <h1 style="text-align: center; margin-bottom: 3%;"> Sign Up </h1>

                <div style="display : flex; gap: 1rem;">
                    <input type="text" id="name" name="fname" placeholder="First Name">
                    <input type="text" id="name" name="fname" placeholder="Last Name">
                </div>

                <input type="email" id="mail" name="user_email" placeholder="Email">
				<div style="display : flex; gap: 1rem;">
                    <input type="password" id="password" name="password" placeholder="password">
                    <input type="password" id="password" name="cpassword" placeholder="Confirm password">
                </div>

                <!-- <div style="display : flex; gap: 1rem;">
                    <input type="text" id="mail" name="number" placeholder="Number">
                    <input type="number" id="name" name="age" placeholder="Age">
                </div> -->

                <select id="gender" name="gender">
                    <option>Select Gender</option>
                    <option value="male">MALE</option>
                    <option value="female">FEMALE</option>
                    <option value="other">OTHER</option>
                </select>
				<div style="display : flex; gap: 1rem;">
                    <input type="text" id="mail" name="number" placeholder="Number">
                    <input type="number" id="name" name="age" placeholder="Age">
                </div>
                <label for="address">Address:</label><br>
                <textarea style="padding: 3%; height: 10rem;" type="text" id="name" name="address"></textarea><br>

                <!-- <div style="display : flex; gap: 1rem;">
                    <input type="password" id="password" name="password" placeholder="password">
                    <input type="password" id="password" name="cpassword" placeholder="Confirm password">
                </div> -->

				<input class="signup-btn" type="submit" name="submit" value="Signup">

            </form>
        </div>
    </div>








    <!-- <form method="POST" action="">
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
    <p>Alrady have an account? <a href="login.php">Login here</a>.</p> -->
</body>
<script src="./script/script.js" async defer></script>

</html>
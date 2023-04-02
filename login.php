<!-- login.php -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style/login.css" />
    <script>
    function showAlert(message) {
        alert(message);
    }
    </script>

</head>

<body>
    <?php
		require_once('./db_connect.php');

		if(isset($_POST['submit'])) {
			// Retrieve form data
			$email = $_POST['email'];
			$password = $_POST['password'];

			// Validate form data (you can add your own validation rules here)
			if(empty($email) || empty($password)) {
				echo "All fields are required.";
			} else {
				// Check if email and password combination exists in the database
				$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) > 0) {
					// Login successful, redirect to dashboard page
					header('Location: dashboard.php');
					exit();
				} else {
					// Invalid email and password combination, display alert
					echo "<script>showAlert('Invalid email Or password.');</script>";
				}
			}
		}

		// Close database connection
		mysqli_close($conn);
	?>
    <form method="POST" action="">
        <h3>Login Here</h3>

        <label>Email:</label><br>
        <input type="email" name="email" id="username">

        <label>Password</label><br>
        <input type="password" name="password" id="password"><br>

        <input class="loginbtn" type="submit" name="submit" value="Login"><br>

        <p>Don't have an account? <a class="signupbtn" href="signup.php">Sign up</a></p>
    </form>
</body>

</html>
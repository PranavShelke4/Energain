<!-- login.php -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style/loginPage.css" />
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

    <div class="loginSection">
        <div class="left-side">
			<div class="left-side-inside-box">
				digital platform for distance <snap style="color: rgb(10, 10, 26)">learning.</snap> 
				<p style="font-size: 1.5rem;">You will never know everything.<br />but you will know more</p>
			</div>
        </div>
        <div class="right-side">
		   <img class="logo" src="./assets/img/blueLogo.png" />
                <h1>Hey, Hello 👋</h1>
				<p>Enter The Information you entered while registering</p>
            <form class="login-form" method="POST" action="">

                <label>Email :</label><br>
                <input type="email" name="email" id="username"><br/><br/>

                <label>Password :</label><br>
                <input type="password" name="password" id="password"><br/> <br/><br/>

                <input class="loginbtn" type="submit" name="submit" value="Login"><br/>

                <p>Don't have an account? <a class="signupbtn" href="signup.php">Sign up</a></p>
            </form>
        </div>
    </div>


</body>

</html>
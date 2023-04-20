<!-- login.php -->
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="../style/Login.css" />
    <script>
    function showAlert(message) {
        alert(message);
    }
    </script>

</head>

<body>
    <?php
        session_start();
		require_once('../db_connect.php');

		if(isset($_POST['submit'])) {
			$email = $_POST['email'];
			$password = $_POST['password'];

			if(empty($email) || empty($password)) {
				// echo "All fields are required.";
                
			} else {
				$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) > 0) {
				    $_SESSION['email'] = $email;
				    header('Location: Dashbord.php');
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
                Digital platform for monitoring <snap style="color: rgb(10, 10, 26); font-weight: bold;">Elect. Usages.
                </snap>
                <p style="font-size: 1.5rem;">You will never late again.<br /></p>
            </div>
        </div>
        <div class="right-side">
            <img class="logo" src="../assets/logo/blueLogo.png" />
            <h1>Hey, Hello 👋</h1>
            <snap style="color: rgb(10, 10, 26); font-weight: bold;">Welcome To Energain,</snap>
            <p>Please Enter Your Login Information.</p>
            <form class="login-form" method="POST" action="">

                <!-- <label>Email :</label><br> -->
                <input type="email" name="email" id="username" placeholder="Email"><br /><br />

                <!-- <label>Password :</label><br> -->
                <input type="password" name="password" id="password" placeholder="Password"><br /> <br /><br />

                <input class="loginbtn" type="submit" name="submit" value="Login"><br />
                <br />
                <br />

                <p class="signupoption">Don't have an account? <a class="signupbtn" href="Signup.php">Register</a>
                </p>

            </form>
        </div>
    </div>


</body>

</html>
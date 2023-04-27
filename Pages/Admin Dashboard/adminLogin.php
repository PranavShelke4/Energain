
<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
    <?php
       session_start();
       require_once('../../db_connect.php');

       if(isset($_POST['submit'])) {
           $email = $_POST['email'];
           $password = $_POST['password'];

           // Validate form data (you can add your own validation rules here)
           if(empty($email) || empty($password)) {
               echo "All fields are required.";
           } else {
               $sql = "SELECT * FROM admin WHERE email = '$email'";
               $result = mysqli_query($conn, $sql);

               if(mysqli_num_rows($result) == 1) {
                   $row = mysqli_fetch_assoc($result);

                   // Verify password
                   if(password_verify($password, $row['password'])) {
                       $_SESSION['email'] = $email;
                       header("Location: AdminDashboard.php");
                       exit();
                   } else {
                       echo "<script>alert('Invalid password.');</script>";
                   }
               } else {
                   echo "<script>alert('Invalid email');</script>";
               }
           }
       }

       // Close database connection
       mysqli_close($conn);
    ?>
    <h1>Admin Login</h1>
    <?php if(isset($error)): ?>
    <div style="color:red;"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>


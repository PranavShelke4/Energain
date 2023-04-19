<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashbord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../style/index.css" />
</head>

<body>
    <?php
        session_start();
        require_once('../db_connect.php');

        $electricityuses_query = "SELECT * FROM electricityuses";
        $electricityuses_result = mysqli_query($conn,$electricityuses_query);
        
        $electricityuses_data = array();
        
        if(mysqli_num_rows( $electricityuses_result) > 0) {
            while($row = mysqli_fetch_assoc( $electricityuses_result)) {
                $electricityuses_data[] = $row;
            }
        }

        $solarusages_query = "SELECT * FROM solarusages";
        $solarusages_result = mysqli_query($conn, $solarusages_query);
        
        $solarusages_data = array();
        
        if(mysqli_num_rows( $solarusages_result) > 0) {
            while($row = mysqli_fetch_assoc( $solarusages_result)) {
                $solarusages_data[] = $row;
            }
        }

		
// Check if user is logged in, otherwise redirect to login page
    if(!isset($_SESSION['email'])) {
	header("Location: login.php");
	exit();
}

// Close the database connection
mysqli_close($conn);
?>

    <div class="flex">
        <?php

            require_once('../components/navbar.php');

            require_once('../components/Home/homeDashbord.php');
?>
    </div>

</body>

</html>
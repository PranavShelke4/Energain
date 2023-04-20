<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Profile</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../../style/uploadData.css" />
    </head>
    <body>
    <?php
        session_start();
        require_once('../../db_connect.php');
		
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

            require_once('../../components/User/navbar.php');

            require_once('../../components/User/ProfileSection.php');
        ?>
    </div>
    </body>
</html>
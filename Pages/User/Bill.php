<html>
    <head>
        <title>Bill</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <?php
        session_start();
        require_once('../../db_connect.php');

        $unpaid_bill_query = "SELECT * FROM unpaidbill";
        $unpaid_bill_result = mysqli_query($conn,$unpaid_bill_query);
        
        $unpaid_bill = array();
        
        if(mysqli_num_rows( $unpaid_bill_result) > 0) {
            while($row = mysqli_fetch_assoc( $unpaid_bill_result)) {
                $unpaid_bill[] = $row;
            }
        }

        $paid_bill_query = "SELECT * FROM solarusages";
        $paid_bill_result = mysqli_query($conn, $paid_bill_query);
        
        $paid_bill_data = array();
        
        if(mysqli_num_rows( $paid_bill_result) > 0) {
            while($row = mysqli_fetch_assoc( $paid_bill_result)) {
                $paid_bill_data[] = $row;
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

            require_once('../../components/User/navbar.php');

            require_once('../../components/User/billSection.php');
        ?>
    </div>
        
        
    </body>
</html>
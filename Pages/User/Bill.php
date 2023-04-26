<html>
    <head>
        <title>Bill</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../../style/bill.css" />
    </head>
    <body>
        <?php
            session_start();
            require_once('../../db_connect.php');

            // Get meter id for logged-in user
            $email = $_SESSION['email'];
            $meter_id_query = "SELECT meter_id FROM users WHERE email = '$email'";
            $meter_id_result = mysqli_query($conn, $meter_id_query);
            $meter_id_row = mysqli_fetch_assoc($meter_id_result);
            $meter_id = $meter_id_row['meter_id'];

            $unpaid_bill_query = "SELECT * FROM unpaidbill WHERE meter_id = '$meter_id'";
            $unpaid_bill_result = mysqli_query($conn,$unpaid_bill_query);
            $unpaid_bill = array();
            if(mysqli_num_rows( $unpaid_bill_result) > 0) {
                while($row = mysqli_fetch_assoc( $unpaid_bill_result)) {
                    $unpaid_bill[] = $row;
                }
            }

            $paid_bill_query = "SELECT * FROM paidbills WHERE meter_id = '$meter_id'";
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
        ?>
        
    <div class="flex">
        <?php

            require_once('../../components/User/navbar.php');
        ?>
        <div class="w-full pl-72 bg-[#DFEBE7] p-6 overscroll-auto">
            <div id="notice">Notice</div>
            <div class="flex flex-wrap">
                <div id="card" class="w-60 text-2xl h-36 ml-10 text-white">
                Current Due <br /> Bill :- 60 ₹
                </div>
                <div id="card2" class="w-60 text-2xl h-36 ml-10 text-white">
                    Last Month <br /> Bill :- 900 ₹
                </div>
                <div id="card3" class="w-60 text-2xl h-36 ml-10 text-white">
                Pending <br /> Due :- No
                </div>
            </div>
            <div id="title-bar1">Unpaid Bills</div>


            <?php
                if (!empty($unpaid_bill)) {
            ?>

            <table class="w-full bg-[#D9D9D9] border-collapse border border-slate-500">
                <thead>
                    <tr class="bg-[black] text-white text-2xl font-light">
                        <th class="border border-slate-600 ...">Sr.No.</th>
                        <th class="border border-slate-600 ...">Date </th>
                        <th class="border border-slate-600 ...">Units Consumed</th>
                        <th class="border border-slate-600 ...">Price Before Due Date</th>
                        <th class="border border-slate-600 ...">Price After Due Date</th>
                    </tr>
                </thead>
                <tbody class="text-xl text-center font-normal">
                    <?php
                        foreach ($unpaid_bill as $row) {
                    ?>
                    <tr>
                        <td class="border border-slate-700 ..."><?php echo $row['srno']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['data']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['unitconsume']; ?> Units</td>
                        <td class="border border-slate-700 ..."><?php echo $row['price']; ?> ₹</td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
            } else {
                echo "No data found.";
            }
            ?>

            <div id="title-bar1">Paid Bills</div>

            <?php
                if (!empty($paid_bill_data)) {
            ?>

            <table class="w-full bg-[#D9D9D9] border-collapse border border-slate-500">
                <thead>
                    <tr class="bg-[black] text-white text-2xl font-light">
                        <th class="border border-slate-600 ...">Sr.No.</th>
                        <th class="border border-slate-600 ...">Date </th>
                        <th class="border border-slate-600 ...">Units Consumed</th>
                        <th class="border border-slate-600 ...">Price</th>
                    </tr>
                </thead>
                <tbody class="text-xl text-center font-normal">
                    <?php
                        foreach ($paid_bill_data as $row) {
                    ?>
                    <tr>
                        <td class="border border-slate-700 ..."><?php echo $row['srno']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['date']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['unitconsume']; ?> Units</td>
                        <td class="border border-slate-700 ..."><?php echo $row['price']; ?> ₹</td>
                        <td class="border border-slate-700 ..."><?php echo $row['price']; ?> ₹</td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
            } else {
                echo "No data found.";
            }
            ?>
        </div>

    </div>
        
        
    </body>
</html>
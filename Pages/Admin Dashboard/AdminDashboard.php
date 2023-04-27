<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashbord</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../style/index.css" />
</head>

<body>

    <?php
         session_start();
         require_once('../../db_connect.php');

        $users_query = "SELECT * FROM users";
        $users_result = mysqli_query($conn, $users_query);
        $users_data = array();
        if(mysqli_num_rows($users_result) > 0) {
            while($row = mysqli_fetch_assoc($users_result)) {
                $users_data[] = $row;
            }
        }

        $unpaid_bill_query = "SELECT * FROM bill_unpaid_users";
        $unpaid_bill_result = mysqli_query($conn, $unpaid_bill_query);
        $unpaid_bill_data = array();
        if(mysqli_num_rows($unpaid_bill_result) > 0) {
            while($row = mysqli_fetch_assoc($unpaid_bill_result)) {
                $unpaid_bill_data[] = $row;
            }
        }

          // Close database connection
        mysqli_close($conn);
    ?>

    <div class="flex">
        <?php
            require_once('../../components/Admin/AdminNavbar.php');
        ?>

        <div class="w-full pl-72 bg-[#DFEBE7] p-6 overscroll-auto">

            <div id="title-bar1">All Users</div>

            <?php
                if (!empty($users_data)) {
            ?>
            <table class="w-full bg-[#D9D9D9] border-collapse border border-slate-500">
                <thead>
                    <tr class="bg-[black] text-white text-xl font-light">
                        <th class="border border-slate-600 ...">Sr.No.</th>
                        <th class="border border-slate-600 ...">Meter ID</th>
                        <th class="border border-slate-600 ...">First Name</th>
                        <th class="border border-slate-600 ...">Last Name</th>
                        <th class="border border-slate-600 ...">Age</th>
                        <th class="border border-slate-600 ...">Mobile</th>
                        <th class="border border-slate-600 ...">Gender</th>
                        <th class="border border-slate-600 ...">Address</th>
                        <th class="border border-slate-600 ...">Email</th>
                    </tr>
                </thead>
                <tbody class="text-xl text-center font-normal">
                    <?php
                        $i = 1;
                        foreach ($users_data as $row) {
                    ?>
                    <tr>
                        <td class="border border-slate-700 ..."><?php echo $i++; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['meter_id']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['fname']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['lname']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['age']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['mobile_no']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['gender']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['address']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['email']; ?></td>
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


            <div id="title-bar1">Upaid Bill Users</div>

            <?php
                if (!empty($unpaid_bill_data)) {
            ?>
            <table class="w-full  bg-[#D9D9D9] border-collapse border border-slate-500">
                <thead>
                    <tr class="bg-[black] text-white text-xl font-light">
                        <th class="border border-slate-600 ...">Sr.No.</th>
                        <th class="border border-slate-600 ...">Meter ID</th>
                        <th class="border border-slate-600 ...">First Name</th>
                        <th class="border border-slate-600 ...">Last Name</th>
                        <th class="border border-slate-600 ...">Age</th>
                        <th class="border border-slate-600 ...">Mobile</th>
                        <th class="border border-slate-600 ...">Gender</th>
                        <th class="border border-slate-600 ...">Address</th>
                        <th class="border border-slate-600 ...">Email</th>
                        <th class="border border-slate-600 ...">Due Bill</th>
                        <th class="border border-slate-600 ...">Due Date</th>
                        <th class="border border-slate-600 ...">Unit</th>
                    </tr>
                </thead>
                <tbody class="text-xl text-center font-normal">
                    <?php
                        $i = 1;
                        foreach ($unpaid_bill_data as $row) {
                    ?>
                    <tr>
                        <td class="border border-slate-700 ..."><?php echo $i++; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['meter_id']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['fname']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['lname']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['age']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['mobile_no']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['gender']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['address']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['email']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['bill_due']; ?> ₹</td>
                        <td class="border border-slate-700 ..."><?php echo $row['due_date']; ?></td>
                        <td class="border border-slate-700 ..."><?php echo $row['unit']; ?></td>
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
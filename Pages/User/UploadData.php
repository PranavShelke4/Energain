<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload Data</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../style/uploadData.css" />
</head>

<body>
    <?php
            session_start();
            require_once('../../db_connect.php');

            $email = $_SESSION['email'];

            // Get user info
            $user_info_query = "SELECT fname, lname, mobile_no, meter_id, email FROM users WHERE email = '$email'";
            $user_info_result = mysqli_query($conn, $user_info_query);
            $user_info_row = mysqli_fetch_assoc($user_info_result);
            $fname = $user_info_row['fname'];
            $lname = $user_info_row['lname'];
            $mobile_no = $user_info_row['mobile_no'];
            $email = $user_info_row['email'];
            $meter_id = $user_info_row['meter_id'];

            if(isset($_POST['submit'])) {
        
                $previous_meter_data = $_POST['previous_meter_data'];
                $mobile_no = $_POST['mobile_no'];
                $current_meter_data = $_POST['current_meter_data'];
                $meter_photo = $_FILES['meter_photo']['tmp_name'];
            
                // read the image file
                $fp = fopen($meter_photo, 'r');
                $data = fread($fp, filesize($meter_photo));
                $data = mysqli_real_escape_string($conn, $data);
                fclose($fp);
            
                $sql = "INSERT INTO uploaddate (fname, lname, previous_meter_data, mobile_no, current_meter_data, meter_id, meter_photo) 
                        VALUES ('$fname', '$lname', '$previous_meter_data', '$mobile_no', '$current_meter_data', '$meter_id', '$data')";
                
                if(mysqli_query($conn, $sql)) {
                    // echo "Data inserted successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }

            if(isset($_POST['submit2'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $email = $_POST['emailid'];
                $mobile = $_POST['mobileno'];
                $query = $_POST['query'];

                $query_insert = "INSERT INTO query (fname, lname, emailid, mobile_no, query) VALUES ('$fname', '$lname', '$email', '$mobile', '$query')";
                $result = mysqli_query($conn, $query_insert);

                if($result) {
                    // echo "Query submitted successfully!";
                } else {
                    echo "Error: " . mysqli_error($conn);
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

        <div class="w-full pl-72 bg-[#DFEBE7] p-6 overscroll-auto overflow-auto">
            <div id="notice">Notice</div>
            <div id="title-bar1">Upload Meter Data</div>
            <div class="box">
                <form method="POST" enctype="multipart/form-data">
                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="text" name="fname" placeholder="First Name" value="<?php echo $fname; ?>" required disabled>
                        <input class="inputs" type="text" name="lname" placeholder="Last Name" value="<?php echo $lname; ?>" required disabled>
                    </div>

                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="number" name="previous_meter_data" placeholder="Previous Meter Data"
                            required>
                        <input class="inputs" type="number" name="mobile_no" placeholder="Mobile no" value="<?php echo $mobile_no; ?>" required>
                    </div>

                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="number" name="current_meter_data" placeholder="Current Meter Data"
                            required>
                        <input class="inputs" type="number" name="meter_id" placeholder="Meter ID" value="<?php echo $meter_id; ?>" required disabled>
                    </div>

                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="file" name="meter_photo" required>
                    </div>

                    <input class="submit-btn mt-2" type="submit" name="submit" value="Submit">
                </form>
            </div>

            <div id="title-bar1">Upload Query</div>

            <div class="box">
                <form method="POST">
                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="text" name="fname" placeholder="First Name" />
                        <input class="inputs" type="text" name="lname" placeholder="Last Name" />
                    </div>

                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="email" name="emailid" placeholder="Email ID"/>
                        <input class="inputs" type="number" name="mobileno" placeholder="Mobile No" required />
                    </div>

                    <div class="flex gap-16 mb-6">
                        <textarea class="inputs" name="query" placeholder="Enter Your Query"
                            required></textarea>
                    </div>

                    <button class="submit-btn mt2" type="submit" name="submit2">Submit</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
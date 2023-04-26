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

            if(isset($_POST['submit'])) {
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $previous_meter_data = $_POST['previous_meter_data'];
                $mobile_no = $_POST['mobile_no'];
                $current_meter_data = $_POST['current_meter_data'];
                $meter_id = $_POST['meter_id'];
                $meter_photo = $_FILES['meter_photo']['tmp_name'];
            
                // read the image file
                $fp = fopen($meter_photo, 'r');
                $data = fread($fp, filesize($meter_photo));
                $data = mysqli_real_escape_string($conn, $data);
                fclose($fp);
            
                $sql = "INSERT INTO uploaddate (fname, lname, previous_meter_data, mobile_no, current_meter_data, meter_id, meter_photo) 
                        VALUES ('$fname', '$lname', '$previous_meter_data', '$mobile_no', '$current_meter_data', '$meter_id', '$data')";
                
                if(mysqli_query($conn, $sql)) {
                    echo "Data inserted successfully.";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
                        <input class="inputs" type="text" name="fname" placeholder="First Name" required>
                        <input class="inputs" type="text" name="lname" placeholder="Last Name" required>
                    </div>

                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="number" name="previous_meter_data" placeholder="Previous Meter Data"
                            required>
                        <input class="inputs" type="number" name="mobile_no" placeholder="Mobile no" required>
                    </div>

                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="number" name="current_meter_data" placeholder="Current Meter Data"
                            required>
                        <input class="inputs" type="number" name="meter_id" placeholder="Meter ID" required>
                    </div>

                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="file" name="meter_photo" required>
                    </div>

                    <input class="submit-btn mt-2" type="submit" name="submit" value="Submit">
                </form>
            </div>

            <div id="title-bar1">Upload Query</div>

            <div class="box">
                <form method="post">
                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="text" name="fname" placeholder="First Name" required />
                        <input class="inputs" type="text" name="lname" placeholder="Last Name" required />
                    </div>

                    <div class="flex gap-16 mb-6">
                        <input class="inputs" type="email" name="emailid" placeholder="Email ID" required />
                        <input class="inputs" type="number" name="mobileno" placeholder="Mobile No" required />
                    </div>

                    <div class="flex gap-16 mb-6">
                        <textarea class="inputs" name="entreyourquery" placeholder="Enter Your Query"
                            required></textarea>
                    </div>

                    <button class="submit-btn mt2" type="submit" name="submit">Submit</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
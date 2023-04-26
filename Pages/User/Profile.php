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

        
    ?>

    <div class="flex">
        <?php
            require_once('../../components/User/navbar.php');
        ?>

<div class="w-full pl-72 bg-[#DFEBE7] p-6 overscroll-auto overflow-auto">
        <div id="notice">Notice</div>
        <div id="title-bar1">Security Setting</div>
        <div class="box">
            <form type="submit">
                    <input class="inputs mb-4" type="text" placeholder="Current Password" />
                    <input class="inputs mb-4" type="text" placeholder="New Password" />
                    <input class="inputs mb-4" type="text" placeholder="Conform New Password" />
                <button class="submit-btn">Submit</button>

            </form>
        </div>

        <div id="title-bar1">Account Setting</div>

        <div class="box">
            <form type="submit">
                <div class="flex gap-16 mb-6">
                    <input class="inputs" type="text" placeholder="First Name" />
                    <input class="inputs" type="text" placeholder="Last Name" />
                </div>

                <div class="flex gap-16 mb-6">
                    <input class="inputs" type="text" placeholder="Email" />
                    <input class="inputs" type="number" placeholder="Mobile No." />
                </div>

                <div class="flex gap-16 mb-6">
                    <input class="inputs" type="text" placeholder="Gender" />
                    <input class="inputs" type="text" placeholder="Address" />
                </div>

                  <input class="inputs" type="text" placeholder="Address" />

                <button class="submit-btn mt-2">Submit</button>

            </form>
        </div>

    </div>
    </div>
    </body>
</html>
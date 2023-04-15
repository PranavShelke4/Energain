<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Energain</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./style/index.css" />
</head>

<body>
    <?php
        session_start();
        require_once('./db_connect.php');

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
        <div class="w-60 h-screen justify-items-center bg-[#11101D] text-white text-center text-lg">
            <div class="mt-10 grid justify-items-center">
                <img class="w-20" src="./assets/logo/logo.png" />
            </div>

            <div class="mt-10 grid justify-center">
                <img class="w-24 ml-28" src=".\assets\img\profilePhoto.png" />
                <snap>Pranav Shelke<br>Metter id : 3242348</snap>
                <div class="mt-10 grid justify-items-end">
                    <a href="#">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; gap: 1rem; width: 20rem; padding: 0.5rem; padding-left: 4rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-2"
                                width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                <rect x="10" y="12" width="4" height="4" />
                            </svg>Home
                        </snap>
                    </a>
                    <a href="#">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; width: 20rem; padding: 0.5rem; padding-left: 4rem; gap: 1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-receipt-2"
                                width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />
                                <path d="M14 8h-2.5a1.5 1.5 0 0 0 0 3h1a1.5 1.5 0 0 1 0 3h-2.5m2 0v1.5m0 -9v1.5" />
                            </svg>Bills
                        </snap>
                    </a>
                    <a href="#">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; width: 20rem; padding: 0.5rem; padding-left: 4rem; gap: 1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-upload"
                                width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <polyline points="7 9 12 4 17 9" />
                                <line x1="12" y1="4" x2="12" y2="16" />
                            </svg>Upload Data
                        </snap>
                    </a>
                    <a href="#">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; width: 20rem; padding: 0.5rem; padding-left: 4rem; gap: 1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="28"
                                height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="7" r="4" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg> Profile
                        </snap>
                    </a>
                    <a href="logout.php">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; border-bottom: 1px white solid; width: 20rem; padding: 0.5rem; padding-left: 4rem; gap: 1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-logout"
                                width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path
                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />
                                <path d="M7 12h14l-3 -3m0 6l3 -3" />
                            </svg>Logout
                        </snap>
                    </a>
                </div>
            </div>
        </div>
        <div class="w-full bg-[#DFEBE7] p-6 overscroll-auto">
            <div id="notice">Notice</div>
            <div class="flex flex-wrap">
                <div id="card" class="w-60 text-2xl h-36 ml-10 text-white">
                    Current Unit :- 60
                </div>
                <div id="card2" class="w-60 text-2xl h-36 ml-10 text-white">
                    Last Month Unit :- 130
                </div>
                <div id="card3" class="w-60 text-2xl h-36 ml-10 text-white">
                    Current Slab :-
                </div>
            </div>
            <div id="title-bar1">Electricuty Uses</div>


            <?php
                if (!empty($electricityuses_data)) {
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
                        foreach ($electricityuses_data as $row) {
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

            <div id="title-bar1">Solar Electricity Uses</div>

            <?php
                if (!empty($solarusages_data)) {
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
                        foreach ($solarusages_data as $row) {
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
        </div>
    </div>

    <script src="./script/script.js" async defer></script>
</body>

</html>
<html>

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../style/index.css" />
</head>

<body>
        <div class="w-full pl-72 bg-[#DFEBE7] p-6 overscroll-auto">
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

    <script src="./script/script.js" async defer></script>
</body>

</html>
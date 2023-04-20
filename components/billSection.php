<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="../style/bill.css" />
    </head>
    <body>

    <div class="w-full bg-[#DFEBE7] p-6 overscroll-auto">
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
                        <td class="border border-slate-700 ..."><?php echo $row['data']; ?></td>
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

    </body>
</html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Energain</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../style/generatebill.css" />
</head>

<body>
    <div class="w-full pl-72 bg-[#DFEBE7] p-6 overscroll-auto">
        <div class='main-sec'>
          <div id="title-bar1">Generate Bill</div>
            <div class="upd_section">
                <form>
                    <div class="flex gap-6">
                        <input class='input-box pl-4' Placeholder="Meter ID" type="text" />
                        <input class='input-box pl-4' Placeholder="First Name" type="text" />
                        <input class='input-box pl-4' Placeholder="Last Name" type="text" />
                    </div>

                    <div class="flex gap-6">
                        <input class='input-box pl-4' Placeholder="Age" type="number" />
                        <input class='input-box pl-4' Placeholder="Mobile Number" type="number" />
                    </div>

                    <div class="flex gap-6">
                        <input class='input-box pl-4' Placeholder="Email" type="text" />
                        <input class='input-box pl-4' Placeholder="Gender" type="text" />
                    </div>

                    <input class='input-box pl-4' Placeholder="Address" type="text" />

                    <input class='input-box pl-4' Placeholder="Meter Photo" type="image" />

                    <div class="flex gap-6">
                        <input class='input-box pl-4' Placeholder="Unit" type="number" />
                        <input class='input-box pl-4' Placeholder="Confirm Unit" type="number" />
                    </div>

                    <input class="subButton" type="submit" value="Submit" />
                    <input class="cancelButton" type="button" value="Cancel" />
                </form>
            </div>
        </div>
    </div>

    <script src="./script/script.js" async defer></script>
</body>

</html>
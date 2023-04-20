<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../style/uploadData.css" />
</head>

<body>
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

    <script src="./script/script.js" async defer></script>
</body>     

</html>
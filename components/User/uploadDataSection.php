<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../style/uploadData.css" />
</head>

<body>
    <div class="w-full pl-72 bg-[#DFEBE7] p-6 overscroll-auto overflow-auto">
        <div id="notice">Notice</div>
        <div id="title-bar1">Upload Meter Data</div>
        <div class="box">
            <form type="submit">
                <div class="flex gap-16 mb-6">
                    <input class="inputs" type="text" placeholder="First Name" />
                    <input class="inputs" type="text" placeholder="Last Name" />
                </div>

                <div class="flex gap-16 mb-6">
                    <input class="inputs" type="number" placeholder="Previous Meter Data" />
                    <input class="inputs" type="number" placeholder="Mobile no" />
                </div>

                <div class="flex gap-16 mb-6">
                    <input class="inputs" type="number" placeholder="Current Meter Data" />
                    <input class="inputs" type="number" placeholder="Meter ID" />
                </div>

                <div class="flex gap-16 mb-6">
                    <input class="inputs" placeholder="Current Meter Data" />
                    <!-- <input class="inputs" placeholder="Meter ID" /> -->
                </div>

                <button class="submit-btn">Submit</button>

            </form>
        </div>

        <div id="title-bar1">Upload Query</div>

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

                <textarea  rows="4" cols="50" class="inputs" type="number" placeholder="Enter Details..."> </textarea>

                <button class="submit-btn mt-2">Submit</button>

            </form>
        </div>

    </div>

    <script src="./script/script.js" async defer></script>
</body>     

</html>
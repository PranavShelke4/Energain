<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
         <div class="w-64 h-screen fixed  justify-items-center bg-[#11101D] text-white text-center text-lg">
            <div class="mt-10 grid justify-items-center">
                <img class="w-20" src="../../assets/logo/logo.png" />
            </div>

            <div class="mt-10 grid justify-center">
                <img class="w-24 ml-28" src="..\..\assets\img\profilePhoto.png" />
                <snap>Pranav Shelke<br>Admin</snap>
                <div class="mt-10 grid justify-items-end">
                    <a href="../../Pages/Admin Dashboard/AdminDashboard.php">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; gap: 1rem; width: 19rem; padding: 0.5rem; padding-left: 5.5rem; margin-left: -8%;">
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
                    <a href="../../Pages/Admin Dashboard/AdminBills.php">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; width: 19rem; padding: 0.5rem; padding-left: 5.5rem;  margin-left: -8%; gap: 1rem;">
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
                    <!-- <a href="../../Pages/User/UploadData.php">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; width: 19rem; padding: 0.5rem; padding-left: 5.5rem;  margin-left: -8%; gap: 1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-upload"
                                width="28" height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                                <polyline points="7 9 12 4 17 9" />
                                <line x1="12" y1="4" x2="12" y2="16" />
                            </svg>Upload Data
                        </snap>
                    </a> -->
                    <!-- <a href="#">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; width: 19rem; padding: 0.5rem; padding-left: 5.5rem;  margin-left: -8%; gap: 1rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user" width="28"
                                height="28" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="12" cy="7" r="4" />
                                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                            </svg> Profile
                        </snap>
                    </a> -->
                    <a href="../../Pages/Admin Dashboard/Logout.php">
                        <snap class="justify-items-start flex flex-wrap"
                            style="border-top: 1px white solid; border-bottom: 1px white solid; width: 19rem; padding: 0.5rem; padding-left: 5.5rem;  margin-left: -8%; gap: 1rem;">
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
       
        

    </body>
</html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Energain</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../style/index.css" />
</head>

<body>
        <div class="w-full bg-[#DFEBE7] p-6 overscroll-auto">
            
            <div id="title-bar1">Users</div>


            <table class="w-full bg-[#D9D9D9] border-collapse border border-slate-500">
                <thead>
                    <tr class="bg-[black] text-white text-2xl font-light">
                        <th class="border border-slate-600 ...">Sr.No.</th>
                        <th class="border border-slate-600 ...">Meter ID</th>
                        <th class="border border-slate-600 ...">F Name</th>
                        <th class="border border-slate-600 ...">L Name</th>
                        <th class="border border-slate-600 ...">Email</th>
                        <th class="border border-slate-600 ...">Unit</th>
                        <th class="border border-slate-600 ...">Action</th>
                    </tr>
                </thead>
                <tbody class="text-xl text-center font-normal">
                    
                    <tr>
                        <td class="border border-slate-700 ...">1</td>
                        <td class="border border-slate-700 ...">12345</td>
                        <td class="border border-slate-700 ...">Pranav</td>
                        <td class="border border-slate-700 ...">Shelke</td>
                        <td class="border border-slate-700 ...">pranavshelke4@gmail.com</td>
                        <td class="border border-slate-700 ...">100</td>
                        <td class="border border-slate-700 ..."><a href=""><button id="generate-bill">Generate Bill</button></a></td>
                    </tr>

                    <tr>
                        <td class="border border-slate-700 ...">2</td>
                        <td class="border border-slate-700 ...">12400</td>
                        <td class="border border-slate-700 ...">Avadhut</td>
                        <td class="border border-slate-700 ...">Shedage</td>
                        <td class="border border-slate-700 ...">avadhutshedage@gmail.com</td>
                        <td class="border border-slate-700 ...">50</td>
                        <td class="border border-slate-700 ..."><button id="generate-bill">Generate Bill</button></td>
                
                    </tr>

                </tbody>
            </table>
                  
          
        </div>

    <script src="./script/script.js" async defer></script>
</body>

</html>
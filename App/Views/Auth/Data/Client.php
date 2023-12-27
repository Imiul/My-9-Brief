<?php

    $pageTitle = "Home Page - Insurance";
    $pageDescription = "Insurance System";
    $pageKeywords = " ** ";
    $pageAuthor = "Imiul";

    $SpecialTitle = "Client";

    include(__DIR__ . "/../../Layouts/Head.php");
    require_once(__DIR__."/../../../Controllers/Client.php");
?>

<body>
    <section class="flex items-center relative">
        <!-- NAVBAR -->
        <?php require_once(__DIR__ . "/../../Layouts/Sidebar.php"); ?>
        <!-- MAIN -->
        <main class="bg-gray-100 flex-grow h-[100vh] relative pt-2">

            <!-- HEAD -->
            <div class="md:m-5 md:p-5">
                <?php require_once(__DIR__ . "/../../Layouts/Page-head.php"); ?>
                
                <div class="rounded-lg overflow-hidden mt-3 overflow-y-scroll">
                    <table class="w-full min-w-full border border-gray-300 display" id="Table" style="width:100%">
                        <thead>
                            <tr class="bg-[#1d3557] text-white h-[50px] ">
                                <td class="pl-4 border-2 border-[#1d3557]">ID </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Picture </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Full Name </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Cnie </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Address </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Client Since </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Actions </td>
                            </tr>
                        </thead>
                        <tbody class="sm:w-full">

                            <?php
                                foreach($clientData as $client) {
                                    echo "<tr>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $client['id'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'><img src='' alt='client pic''></td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $client['firstName'] . " " . $client['lastName'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $client['cnie'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $client['address'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $client['date'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>
                                            <a href='/Clients?update=". $client['id'] ."' >Up</a> // 
                                            <a href='/Clients?remove=". $client['id'] ."' >RM</a>
                                        </td>";
                                    echo "</tr>";
                                }
                            ?>
                            
                        </tbody>
                    </table>
            </div>
            
            <div id="popupContainer" class="fixed inset-0 flex items-center justify-end bg-black bg-opacity-50 hidden">
                <section class="md:m-5 md:p-5 bg-white rounded-md absolute h-[95vh] w-[40vw]">
                    <button  onclick="hiddPopup()" class="bg-red-200 border-2 border-red-500 text-red-500 h-[50px] px-4 py-2 rounded mb-2" >Close</button>  
                    
                    <form method="POST" enctype="multipart/form-data" >
                        <input type="file" name="picture" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <input type="text" name="firstName" placeholder="First Name" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <input type="text" name="lastName" placeholder="Last Name" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <input type="text" name="cnie" placeholder="Cnie" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <input type="text" name="address" placeholder="Address" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <input type="date" name="date" hidden id="dateInput" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        
                        <button type="submit" name="AddClient" class="bg-[#1d3557] text-white px-4 py-2 rounded">Save Client</button>
                        <button type="reset" class="bg-blue-200 border-2 border-[#1d3557] text-[#1d3557] px-4 py-2 rounded">Reset Form</button>
                    </form>

                </section>
            </div>

        </main>
    </section>
    
    <?php  require_once(__DIR__ . "/../../Layouts/DataTable.php");?>
    <?php  require_once(__DIR__ . "/../../Layouts/AddNew.php");?>
    <?php  require_once(__DIR__ . "/../../Layouts/NewDate.php");?>
    
</body>
<?php include(__DIR__ . "/../../Layouts/End.php") ?>
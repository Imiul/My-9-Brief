<?php


    $pageTitle = "Home Page - Insurance";
    $pageDescription = "Insurance System";
    $pageKeywords = " ** ";
    $pageAuthor = "Imiul";

    $SpecialTitle = "Refunds";

    include(__DIR__ . "/../../Layouts/Head.php");

    require_once(__DIR__."/../../../Controllers/Log-out.php");
    require_once(__DIR__."/../../../Controllers/Refunds.php");
?>

<body>
    <section class="flex items-center relative">
        <?php require_once(__DIR__ . "/../../Layouts/Sidebar.php"); ?>

        <main class="bg-gray-100 flex-grow h-[100vh] relative pt-2">
            <div class="md:m-5 md:p-5">

                <?php require_once(__DIR__ . "//../../Layouts/Page-head.php"); ?>
                
                <div class="rounded-lg overflow-hidden mt-3">
                    <table class="w-full min-w-full border border-gray-300 display" id="Table" style="width:100%">
                        <thead>
                            <tr class="bg-[#1d3557] text-white h-[50px] ">
                                <td class="pl-4 border-2 border-[#1d3557]">ID </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Amount </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Date </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Claim Id </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Actions </td>
                            </tr>
                        </thead>
                        <tbody class="sm:w-full">
                        <?php
                                foreach($refundsData as $refund) {
                                    echo "<tr>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $refund['id'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $refund['amount'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $refund['date'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $refund['claimId'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>
                                            <a href='/Refunds?update=". $refund['id'] ."' >Up</a> // 
                                            <a href='/Refunds?remove=". $refund['id'] ."' >RM</a>
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
                        <form action="" method="POST" class="w-full">
                            
                            <input type="number" name="amount" placeholder="Refund Amount" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                            <input type="date" hidden name="date" id="dateInput" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">

                            <select name="claimId" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                                <option value="NULL" selected >Select Realted Claim</option>
                                <?php
                                    foreach($claimData as $claim) {
                                        echo "<option value='". $claim['id'] ."' >". $claim['description'] . "</option>";
                                    }
                                ?>
                            </select>

                            <button type="submit" name="addRefund" class="bg-blue-500 text-white px-4 py-2 rounded">Save U</button>
                            <button type="reset"  class="bg-blue-200 border-2 border-blue-500 text-blue-500 px-4 py-2 rounded">Reset Form</button>
                        </form>
                    </section>
                </div>

            </div>
        </main>
    </section>


    <?php require_once(__DIR__ . "/../../Layouts/DataTable.php"); ?>
    <?php require_once(__DIR__ . "/../../Layouts/AddNew.php");?>
    <?php require_once(__DIR__ . "/../../Layouts/NewDate.php");?>
    
</body>
<?php include(__DIR__ . "/../../Layouts/End.php") ?>
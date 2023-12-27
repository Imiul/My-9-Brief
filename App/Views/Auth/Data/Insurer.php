<?php
    
    $pageTitle = "Home Page - Insurance";
    $pageDescription = "Insurance System";
    $pageKeywords = " ** ";
    $pageAuthor = "Imiul";

    $SpecialTitle = "Insurer";

    include(__DIR__ . "/../../Layouts/Head.php");

    require_once(__DIR__."/../../../Controllers/Log-out.php");
    require_once(__DIR__."/../../../Controllers/Insurer.php");
?>

<body>
    <section class="flex items-center relative">
        <?php require_once(__DIR__ . "/../../Layouts/Sidebar.php"); ?>
        <main class="bg-gray-100 flex-grow h-[100vh] relative pt-2">
            <div class="md:m-5 md:p-5">

                <?php require_once(__DIR__ . "//../../Layouts/Page-head.php"); ?>
                
                <div class="rounded-lg overflow-hidden mt-3">
                    <table class="container mx-auto px-4 sm:px-6 lg:px-8 py-8 " id="Table" style="width:100%">
                        <thead>
                            <tr class="bg-[#1d3557] text-white h-[50px] ">
                                <td class="pl-4 border-2 border-[#1d3557]">ID </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Logo </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Name </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Address </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Actions </td>
                            </tr>
                        </thead>
                        <tbody class="sm:w-full">
                            <?php
                                foreach($InsurerData as $insurer) {
                                    echo "<tr>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $insurer['id'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'><img src='' alt='client pic''></td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $insurer['name'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $insurer['address'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>
                                            <a href='/Insurers?update=". $insurer['id'] ."' >Up</a> // 
                                            <a href='/Insurers?remove=". $insurer['id'] ."' >RM</a>
                                            </td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </main>
    </section>

    <div id="popupContainer" class="fixed inset-0 flex items-center justify-end bg-black bg-opacity-50 hidden">
                <section class="md:m-5 md:p-5 bg-white rounded-md absolute h-[95vh] w-[40vw]">
                <button  onclick="hiddPopup()" class="bg-red-200 border-2 border-red-500 text-red-500 h-[50px] px-4 py-2 rounded mb-2" >Close</button>
                    
                    <form method="POST" class="w-full" enctype="multipart/form-data" >
                        <input type="text" name="name" placeholder="INsurer Name" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <input type="password" name="password" placeholder="Password" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <input type="text" name="address" placeholder="Insurer Address" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <input type="file" name="picture" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">

                        <button type="submit" name="addInusrer" class="bg-[#1d3557] text-white px-4 py-2 rounded">Save Insurer</button>
                        <button type="reset" class="bg-blue-200 border-2 border-[#1d3557] text-[#1d3557] px-4 py-2 rounded">Reset Form</button>
                    </form>
                </section>
            </div>


    <?php require_once(__DIR__ . "/../../Layouts/DataTable.php"); ?>
    <?php  require_once(__DIR__ . "/../../Layouts/AddNew.php");?>
    
</body>
<?php include(__DIR__ . "/../../Layouts/End.php") ?>
<?php

    $pageTitle = "Home Page - Insurance";
    $pageDescription = "Insurance System";
    $pageKeywords = " ** ";
    $pageAuthor = "Imiul";

    $SpecialTitle = "Article";

    include(__DIR__ . "/../../Layouts/Head.php");

    require_once(__DIR__."/../../../Controllers/Article.php");
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
                                <td class="pl-4 border-2 border-[#1d3557]">Article</td>
                                <td class="pl-4 border-2 border-[#1d3557]">Description </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Added Date </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Insurer Id</td>
                                <td class="pl-4 border-2 border-[#1d3557]">CLient Id </td>
                                <td class="pl-4 border-2 border-[#1d3557]">Action </td>
                            </tr>
                        </thead>
                        <tbody class="sm:w-full">
                            <?php
                                foreach($ArticleData as $article) {
                                    echo "<tr>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $article['id'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $article['title'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $article['description'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $article['date'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $article['insurerId'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>". $article['clientId'] ."</td>";
                                    echo "<td class='pl-4 border-2 border-[#1d3557]'>
                                            <a href='/Articles?update=". $article['id'] ."' >Up</a> // 
                                            <a href='/Articles?remove=". $article['id'] ."' >RM</a>
                                            </td>";
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>

        <div id="popupContainer" class="fixed inset-0 flex items-center justify-end bg-black bg-opacity-50 hidden">
                <section class="md:m-5 md:p-5 bg-white rounded-md absolute h-[95vh] w-[40vw]">
                <button  onclick="hiddPopup()" class="bg-red-200 border-2 border-red-500 text-red-500 h-[50px] px-4 py-2 rounded mb-2" >Close</button>
                    <form action="" method="POST" class="w-full">
                        <input type="text" name="title" placeholder="Article Title" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                        <textarea name="description" placeholder="Article Description" class="w-full mb-2 p-2 border-2 border-gray-600 rounded" ></textarea>
                        <input type="date" hidden name="date" id="dateInput" placeholder="Article Date" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">

                        <select name="insurerId" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                            <option value="NULL" selected >Select Article Insurer</option>
                            <?php
                                foreach($InsurerData as $insurer) {
                                    echo "<option value='". $insurer['id'] ."' >". $insurer['name'] . "</option>";
                                }
                            ?>
                        </select>
                        <select name="clientId" class="w-full mb-2 p-2 border-2 border-gray-600 rounded">
                            <option value="NULL" selected >Select Article Owner</option>
                            <?php
                                foreach($clientData as $client) {
                                    echo "<option value='". $client['id'] ."' >". $client['firstName'] . " " .$client['lastName'] ."</option>";
                                }
                            ?>
                        </select>

                        <button type="submit" name="addArticle" class="bg-blue-500 text-white px-4 py-2 rounded">Save U</button>
                        <button type="reset" class="bg-blue-200 border-2 border-blue-500 text-blue-500 px-4 py-2 rounded">Reset Form</button>
                    </form>
                </section>
            </div>
    </section>

    <?php require_once(__DIR__ . "/../../Layouts/DataTable.php"); ?>
    <?php  require_once(__DIR__ . "/../../Layouts/AddNew.php");?>
    <?php  require_once(__DIR__ . "/../../Layouts/NewDate.php");?>


</body>
<?php include(__DIR__ . "/../../Layouts/End.php") ?>
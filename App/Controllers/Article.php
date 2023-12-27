<?php


    require_once(__DIR__."/../Models/Article.php");
    require_once(__DIR__."/../Services/Article/ServiceArticle.php");

    require_once(__DIR__."/../Services/Client/ServiceClient.php");
    require_once(__DIR__."/../Services/Insurer/ServiceInsurer.php");


    $iServiceClient = new ServiceClient();
    $clientData = $iServiceClient->display();

    $iServiceInsurer = new ServiceInsurer(); 
    $InsurerData = $iServiceInsurer->display();


    if (isset($_POST['addArticle'])) {

        $title = $_POST['title'];
        $description = $_POST['description'];
        $InsurerId = $_POST['insurerId'];
        $ClientId = $_POST['clientId'];

        if (empty($title) || empty($description) || $InsurerId == 'NULL' || $ClientId == 'NULL') {
            echo "<script>window.alert('Inputs should not be empty');</script>";
        } else {

            $id = time();
            $date = $_POST['date'];

            $article = new Article($id, $title, $description, $date, $InsurerId, $ClientId);
            $aService = new ServiceArticle();

            $aService->insert($article);
            $ArticleData = $aService->display();
        }
    } else {

        $aService = new ServiceArticle();
        $ArticleData = $aService->display();
    }

    if (isset($_GET['remove'])) {

        $id = $_GET['remove'];
        $aservice = new ServiceArticle();
        $aservice->delete($id);
        $aservice->display();

    }

?>
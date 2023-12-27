<?php

    require_once(__DIR__."/../Models/Claim.php");
    require_once(__DIR__."/../Services/Claim/ServiceClaim.php");

    require_once(__DIR__."/../Services/Article/ServiceArticle.php");

    $iarticle = new ServiceArticle();
    $articleData = $iarticle->display();

    if (isset($_POST['addArticle'])) {

        $description = $_POST['description'];
        $articleId = $_POST['articleId'];
        $picture = $_FILES['relatedFile']["name"];

        if (empty($description) || empty($articleId) || empty($picture)) {
            echo "<script>window.alert('Inputs should nit be empty');</script>";
        } else {

            $id = time();
            $date = $_POST['date'];

            $tmpFile = $_FILES["relatedFile"]["tmp_name"];
            $newFile = __DIR__. '/../Views/Layouts/Img/Client/'.$picture;
            
            try {
                $result = move_uploaded_file($tmpFile, $newFile);
            } catch (PDOException $e) {
                echo "ERROR UPLOADING IMAGE TO FOLDER"  . $e->getMessage();            
            }


            $iClaim = new Claim($id, $picture, $description, $date, $articleId);
            $iService = new ServiceClaim();

            $iService->insert($iClaim);
            $ClaimData = $iService->display();
        }
    } else {
        $iService = new ServiceClaim();
        $ClaimData = $iService->display();
    }


    if (isset($_GET['remove'])) {

        $id = $_GET['remove'];
        $cservice = new ServiceClaim();
        $cservice->delete($id);
        $cservice->display();

    }

?>
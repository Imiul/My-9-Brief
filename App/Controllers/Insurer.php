<?php

    require_once(__DIR__."/../Core/GenerateId.php");
    require_once(__DIR__."/../Models/Insurer.php");
    require_once(__DIR__."/../Services/Insurer/ServiceInsurer.php");

    if (isset($_POST['addInusrer'])) {

        $name = $_POST['name'];
        $address = $_POST['address'];
        $pic = $_FILES['picture']["name"];
        $password = $_POST['password'];


        if (empty($pic) || empty($address) || empty($name) || empty($password) ) {
            echo "<script>window.alert('Inputs should not be empty !');</script>";
        } else {

            $id = time();
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            $tmpFile = $_FILES["picture"]["tmp_name"];
            $newFile = __DIR__. '/../Views/Layouts/Img/Insurer/'.$_FILES["picture"]["name"];
            
            try {
                $result = move_uploaded_file($tmpFile, $newFile);
            } catch (PDOException $e) {
                echo "ERROR UPLOADING IMAGE TO FOLDER"  . $e->getMessage();            
            }

            $insurer = new Insurer($id, $pic, $name, $address, $hashedPassword);
            $iService = new ServiceInsurer();
            $iService->insert($insurer);

            $InsurerData = $iService->display();

        }
    } else {
        $iService = new ServiceInsurer();
        $InsurerData = $iService->display();
    }

    if (isset($_GET['remove'])) {

        $id = $_GET['remove'];
        $iservice = new ServiceInsurer();
        $iservice->delete($id);
        $iservice->display();

    }

    ?>
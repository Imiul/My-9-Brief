<?php

    require_once(__DIR__."/../Core/GenerateId.php");
    require_once(__DIR__."/../Models/Client.php");
    require_once(__DIR__."/../Services/Client/ServiceClient.php");

    if (isset($_POST['AddClient'])) {

        $pic = $_FILES["picture"]["name"];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $cnie = $_POST['cnie'];
        $address = $_POST['address'];

        if (empty($pic) || empty($firstName) || empty($lastName) || empty($cnie) || empty($address)) {
            echo "<script>window.alert('Inputs should not be empty !');</script>";
        } else {

            $id = time();
            $date = $_POST['date'];

            $tmpFile = $_FILES["picture"]["tmp_name"];
            $newFile = __DIR__. '/../../Public/'.$_FILES["picture"]["name"];
            
            try {
                $result = move_uploaded_file($tmpFile, $newFile);
            } catch (PDOException $e) {
                echo "ERROR UPLOADING IMAGE TO FOLDER"  . $e->getMessage();            
            }

            $client = new Client($id, $pic, $firstName, $lastName, $cnie, $address, $date);
            $cService = new ServiceClient();
            $cService->insert($client);
            $clientData = $cService->display();
        }
    } else {

        $cService = new ServiceClient();
        $clientData = $cService->display();
    }

    if (isset($_GET['remove'])) {

        $id = $_GET['remove'];
        $cservice = new ServiceClient();
        $cservice->delete($id);
        $cservice->display();

    }
?>
<?php

    
    require_once(__DIR__."/../Services/Database.php");
    require_once(__DIR__."/../Services/Insurer/ServiceInsurer.php");

    if (isset($_POST['login'])) {

        $name = $_POST['name'];
        $password = $_POST['password'];

        $service = new ServiceInsurer();
        
        if ($service->authentificate($name, $password)) {

            $_SESSION['logedIn'] = true;
            $_SESSION['name'] = $name;

            header("Location: /Insurers");

        } else {
            echo "<script>window.alert('Information Invalid');</script>";
        }

    }
?>
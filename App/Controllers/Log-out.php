<?php

    if (isset($_POST['logout'])) {
        try {
        
            session_unset();
            session_destroy();
            echo "<script>window.alert('yes');</script>";
            header("Location: /Login");
            die();
    
        } catch (PDOException $e) {
            echo "Error Logging Out !! " . $e->getMessage();
            die();
        }
    }


    if ($_SESSION['name']) {

    }

?>
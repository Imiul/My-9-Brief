<?php

    require_once(__DIR__."/../Models/Premium.php");
    require_once(__DIR__."/../Services/Premium/ServicePremium.php");

    require_once(__DIR__."../../Services/Claim/ServiceClaim.php");

    $sclaim = new ServiceClaim();
    $claimData = $sclaim->display();


    if (isset($_POST['addRefund'])) {
        
        $amount = $_POST['amount'];
        $claimId = $_POST['claimId'];

        if (empty($amount) || $amount == 'NULL' ) {
            echo "<script>window.alert('Inputs should not be empty');</script>";
        } else {

            $id = time();
            $date = $_POST['date'];

            $refunds = new Premium($id, $amount, $date, $claimId);
            $service = new ServicePremium();

            $service->insert($refunds);
            $refundsData = $service->display();

        }
    } else {
        $service = new ServicePremium();
        $refundsData = $service->display();
    }


    if (isset($_GET['remove'])) {

        $id = $_GET['remove'];
        $rservice = new ServicePremium();
        $rservice->delete($id);
        $rservice->display();

    }

?>
<?php

    require_once(__DIR__ . "/../Database.php");
    require_once(__DIR__ . "/IServicePremium.php");

    class ServicePremium extends Database implements IServicePremium {

        function insert(Premium $premium)
        {
            $pdo = $this->connect();

            $id = $premium->getId();
            $amount = $premium->getAmount();
            $date = $premium->getDate();
            $claimId = $premium->getClaimId();

            $sql = "
                INSERT INTO premium (id, amount, date, claimId)
                VALUES (:id, :amount, :date, :claimId)
            ";

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":amount", $amount);
                $stmt->bindParam(":date", $date);
                $stmt->bindParam(":claimId", $claimId);
                $stmt->execute();
            } catch (PDOException $e) {
                echo "Error inserting refund Data !! " . $e->getMessage();
                die();
            }
        }

        function update(Premium $premium)
        {
            
        }

        function delete($id)
        {
            $pdo = $this->connect();

            $date = date("Y-m-d H:i:s");

            $sql = "
                UPDATE premium
                SET softDelete = :date
                WHERE id = :id
            ";

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":date", $date);
                $stmt->bindParam(":id", $id);
                $stmt->execute();

            } catch (PDOException $e) {
                echo "Error Deleting Refund With Id : $id" . $e->getMessage();
            }
        }

        function display()
        {
            $pdo = $this->connect();

            $sql = "SELECT * FROM premium";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $ClaimDAta = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $ClaimDAta;
        }

    }
?>
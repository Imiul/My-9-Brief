<?php

    require_once(__DIR__ . "/../Database.php");
    require_once(__DIR__ . "/IServiceClient.php");

    class ServiceClient extends Database implements IServiceClient {

        function insert(Client $client)
        {
            $pdo = $this->connect();

            $id = $client->getId();
            $pic = $client->getPic();
            $firstName = $client->getFirstName();
            $lastName = $client->getLastName();
            $cnie = $client->getCnie();
            $address = $client->getAddress();
            $date = $client->getDate();

            $sql = "
                INSERT INTO client (id, pic, firstName, lastName, cnie, address, date)
                VALUES (:id, :pic, :firstName, :lastName, :cnie, :address, :date)
            ";

            try {
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(":id", $id);
                $stmt->bindParam(":pic", $pic);
                $stmt->bindParam(":firstName", $firstName);
                $stmt->bindParam(":lastName", $lastName);
                $stmt->bindParam(":cnie", $cnie);
                $stmt->bindParam(":address", $address);
                $stmt->bindParam(":date", $date);
                $stmt->execute();
                
            } catch (PDOException $e) {
                echo "Error Inserting Client Data ! " . $e->getMessage();
            }

        }

        function update(Client $client)
        {
        }

        function delete($id)
        {
            $pdo = $this->connect();

            $date = date("Y-m-d H:i:s");

            $sql = "
                UPDATE client
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

            $sql = "SELECT * FROM client";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $clientData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $clientData;
        }

    }
?>
<?php

    require_once(__DIR__ . "/../Database.php");
    require_once(__DIR__ . "/IServiceInsurer.php");

    class ServiceInsurer extends Database implements IServiceInsurer {

        function insert(Insurer $insurer)
        {
            $pdo = $this->connect();

            $id = $insurer->getId();
            $pic = $insurer->getPic();
            $name = $insurer->getName();
            $address = $insurer->getAddress();

            $sql = "
                INSERT INTO insurer (id, pic, name, address)
                VALUES (:id, :pic, :name, :address)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":pic", $pic);
            $stmt->bindParam(":name", $name);
            $stmt->bindParam(":address", $address);
            $stmt->execute();
        }

        function update(Insurer $insurer)
        {
            
        }

        function delete($id)
        {
            $pdo = $this->connect();

            $date = date("Y-m-d H:i:s");

            $sql = "
                UPDATE insurer
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

            $sql = "SELECT * FROM insurer";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $insurerData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $insurerData;
        }

    }
?>
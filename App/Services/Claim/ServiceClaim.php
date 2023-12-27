<?php

    require_once(__DIR__ . "/../Database.php");
    require_once(__DIR__ . "/IServiceClaim.php");

    class ServiceClaim extends Database implements IServiceClaim {

        function insert(Claim $claim)
        {
            $pdo = $this->connect();

            $id = $claim->getId();
            $relatedFile = $claim->getPic();
            $description = $claim->getDescription();
            $date = $claim->getDate();
            $articleId = $claim->getArticleId();

            $sql = "
                INSERT INTO claim (id, relatedFile, description, date, articleId)
                VALUES (:id, :relatedFile, :description, :date, :articleId)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":relatedFile", $relatedFile);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":date", $date);
            $stmt->bindParam(":articleId", $articleId);
            $stmt->execute();
        }

        function update(Claim $claim)
        {
            
        }

        function delete($id)
        {
            $pdo = $this->connect();

            $date = date("Y-m-d H:i:s");

            $sql = "
                UPDATE claim
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

            $sql = "SELECT * FROM claim";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $claimData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $claimData;
        }

    }
?>
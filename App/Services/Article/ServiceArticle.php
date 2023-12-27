<?php

    require_once(__DIR__ . "/../Database.php");
    require_once(__DIR__ . "/IServiceArticle.php");

    class ServiceArticle extends Database implements IServiceArticle {

        function insert(Article $article)
        {
            $pdo = $this->connect();

            $id = $article->getId();
            $title = $article->getTitle();
            $description = $article->getDescription();
            $date = $article->getDate();
            $insuredId = $article->getInsurerId();
            $clientId = $article->getClientId();

            $sql = "
                INSERT INTO article (id, title, description, date, insurerId, clientId)
                VALUES (:id, :title, :description, :date, :insuredId, :clientId)
            ";

            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":title", $title);
            $stmt->bindParam(":description", $description);
            $stmt->bindParam(":date", $date);
            $stmt->bindParam(":insuredId", $insuredId);
            $stmt->bindParam(":clientId", $clientId);
            $stmt->execute();

        }

        function update(Article $article)
        {
            
        }

        function delete($id)
        {
            $pdo = $this->connect();

            $date = date("Y-m-d H:i:s");

            $sql = "
                UPDATE article
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

            $sql = "SELECT * FROM article";

            $stmt = $pdo->prepare($sql);
            $stmt->execute();

            $articleData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $articleData;
        }

    }
?>
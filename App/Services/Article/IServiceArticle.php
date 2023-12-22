<?php

    interface IServiceArticle {

        function insert(Article $article);
        function update(Article $article);
        function delete($id);
        function display();

    }

?>
<?php

    interface IServiceInsurer {

        function insert(Insurer $insurer);
        function update(Insurer $insurer);
        function delete($id);
        function display();

    }

?>
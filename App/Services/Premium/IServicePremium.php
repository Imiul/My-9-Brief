<?php

    interface IServicePremium {

        function insert(Premium $premium);
        function update(Premium $premium);
        function delete($id);
        function display();

    }

?>
<?php

    interface IServiceClaim {

        function insert(Claim $claim);
        function update(Claim $claim);
        function delete($id);
        function display();

    }

?>
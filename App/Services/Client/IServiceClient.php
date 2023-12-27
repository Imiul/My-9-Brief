<?php

    interface IServiceClient {

        function insert(Client $client);
        function update(Client $client);
        function delete($id);
        function display();

    }

?>
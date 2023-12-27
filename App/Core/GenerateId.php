<?php

    function generateId() {
        $time = time();
        $number = rand(1111, 2222);

        $id = $time * $number;
        return $id;
    }

    ?>
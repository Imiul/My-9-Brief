<?php


    function loadView($fileName) 
    {
        $file = "/../Views/" . $fileName . ".php";
        return $file;
    }

    function dump($value) 
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }

    function checkUrl($value) 
    {
        if ($_SERVER['REQUEST_URI'] === $value) {
            return true;
        }  else return false;
    }

    function MakeItActive($value)
    {if (checkUrl($value)) {echo "bg-indigo-200  bg-opacity-30";}}

?>
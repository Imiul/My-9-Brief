<?php

    $pageTitle = "Home Page - Insurance";
    $pageDescription = "Insurance System";
    $pageKeywords = " ** ";
    $pageAuthor = "Imiul";

    $SpecialTitle = "Insurer";

    // include(__DIR__ . "/Layouts/Head.php");
?>

<ul>
    <li><a href="/Login">Login Page</a></li>
    <li><a href="/Register">Register</a></li>
    <!-- <li><a href="/Resetpassword">Reset password</a></li> -->
    <br>
    <li><a href="/Insurers">Insurers</a></li>
    <li><a href="/Clients">Clients</a></li>
    <li><a href="/Claims">Claims</a></li>
    <li><a href="/Articles">Articles</a></li>
    <li><a href="/Refunds">Refunds</a></li>
</ul>

<?php

    require_once(__DIR__."/../Services/Database.php");
?>
<img src="/App/Views/Layouts/Img/Client/827-1696616160.jpg" alt="ds">
<img src="Layouts/Img/Client/827-1696616160.jpg" alt="ds">

<?php include(__DIR__ . "/Layouts/End.php") ?>
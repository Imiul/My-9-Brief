<?php
    $pageTitle = "Login Page - Insurance";
    require_once(__DIR__."/../../../Controllers/Login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- TAILWIND CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $pageTitle ?></title>
</head>

<body>
    
    <form method="POST">
        <input type="text" name="name" placeholder="name">
        <input type="password" name="password" placeholder="password">

        <button name="login" type="submit">Login</button>
        <button type="reset">Rest Form</button>
    </form>
    
</body>
<?php include(__DIR__."/../../Layouts/End.php") ?>
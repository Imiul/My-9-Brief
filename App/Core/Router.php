<?php


    require_once("Helpers.php");

    $url = parse_url($_SERVER['REQUEST_URI'])['path'];
    
    $routes = [
        "/" => loadView("index"),
        "/Login" => loadView("Auth/Act/Login"),
        "/Register" => loadView("Auth/Act/Register"),
        "/Resetpassword" => loadView("Auth/Act/Reset-password"),
        "/logOut" => loadView("Auth/Act/log-out"),
        
        "/Insurers" => loadView("Auth/Data/Insurer"),
        "/Clients" => loadView("Auth/Data/Client"),
        "/Claims" => loadView("Auth/Data/Claim"),
        "/Articles" => loadView("Auth/Data/Article"),
        "/Refunds" => loadView("Auth/Data/Refunds")
    ];


    if (array_key_exists($url, $routes)) {
        require_once(__DIR__ . "/" . "$routes[$url]");
    } else {
        http_response_code(404);
        require_once(__DIR__ . loadView("/Error/404"));
        die();
    }

?>
<?php

session_start();

require __DIR__ .'/src/routes/router.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [            
    '/home' => 'public/views/home.php',
    '/atd' => 'public/views/atd.php'
];

$routesGlobal = [
    '/' => 'public/views/login.php',
    '/register' => 'public/views/register.php'
];


if(isset($_SESSION['isLoggedin'])){
    if($_SESSION['UID'] === '')
    {
        echo '<script>alert("USER DOESN"T EXIST")</script>';
        $_SESSION['isLoggedin'] = false;
        header('location:/');
    }
    else{
        if(array_key_exists($uri,$routes)){
            require $routes[$uri];
        }
        else if(array_key_exists($uri,$routesGlobal)){
            header('location:/home');
        }
        else{
            require 'public/404.php';
        
            die();
        }
    }
}
else{
    if(array_key_exists($uri,$routesGlobal)){
        require $routesGlobal[$uri];
    }
    else if(array_key_exists($uri,$routes)){
       header('location:/');
    }
    else{
        require 'public/404.php';
    
        die();
    }
}

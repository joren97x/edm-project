<?php


require $_SERVER['DOCUMENT_ROOT'] .'/src/controller/database.php';
require $_SERVER['DOCUMENT_ROOT'] .'/src/controller/userController.php';
require $_SERVER['DOCUMENT_ROOT'] .'/src/controller/todoController.php';

if (isset($_POST['choice'])) {    
    switch ($_POST['choice']) {
        
        case 'login':            
            $_POST['email'] = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $_POST['pass'] = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');

            $ctr = new userController();
            $ctr->user_login();
            break;
        case 'registerUser':
            $_POST['email'] = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $_POST['pass'] = htmlspecialchars($_POST['pass'], ENT_QUOTES, 'UTF-8');
            $_POST['fname'] = htmlspecialchars($_POST['fname'], ENT_QUOTES, 'UTF-8');
            $_POST['lname'] = htmlspecialchars($_POST['lname'], ENT_QUOTES, 'UTF-8');
            
            $ctr = new userController();
            $ctr->user_registration();           
            break;
        case 'logout':            
            $ctr = new userController();
            $ctr->user_logout();        
            break;
        case 'loadToDoList':    
            session_start();        
            $ctr = new todoController();
            $ctr->todoList();        
            break;
        case 'updateToDo':
            session_start();
            $ctr = new todoController();
            $ctr->updateToDo();
            break;
        case 'deleteTodo':
            session_start();
            $ctr = new todoController();
            $ctr->deleteTodo();
            break;
        case 'updateTodoStatus':
            session_start();
            $ctr = new todoController();
            $ctr->updateToDoStatus();
            break;
        case 'addToDoList':
            session_start();
            $ctr = new todoController();
            $ctr->addTodo();
            break;
        default:
            echo 'cannot handle request';
            break;
    }
}

    

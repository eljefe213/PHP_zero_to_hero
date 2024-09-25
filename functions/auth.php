<?php 

function is_connected() : bool {
    if (session_status() === PHP_SESSION_NONE) {   
        session_start();
    }        
    
    return !empty($_SESSION['connected']);
}

function connected_user() {   
    if(!is_connected()){
        header('Location: /login.php');
        exit();
    }
}
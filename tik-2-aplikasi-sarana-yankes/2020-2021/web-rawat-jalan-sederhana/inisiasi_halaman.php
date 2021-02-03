<?php
    session_start(); 
    
    if(!isset($_SESSION['valid'])) {
        header('location:halaman_login.php');
        exit();
    }
    
?>
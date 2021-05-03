<?php
session_start();

$csrf_token = $_SESSION['csrf_token'] ?? null;

if(!$csrf_token or $csrf_token !== filter_input(INPUT_POST, '_csrf_token')){
    die('CSRF Validation falhou');

}

include 'libs/get_data.php';
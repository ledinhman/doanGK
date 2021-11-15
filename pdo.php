<?php
    define('HOST', 'localhost:3306');
    define('DB', 'bookstores');
    define('USER', 'root');
    define('PW', '');
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PW);
    $pdo->query('set names utf8');
?>
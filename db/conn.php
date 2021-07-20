<?php 
/*
    $host = 'localhost';
    $db = 'db_ngo';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
*/
$host = 'sql6.freemysqlhosting.net';
    $db = 'sql6426681';
    $user = 'sql6426681';
    $pass = 'Rzc2lgWjy6';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
?>

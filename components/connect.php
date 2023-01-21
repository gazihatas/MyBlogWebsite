<?php
require_once __DIR__.'/../config/default.php';

try {
    $db_name = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;
    $user_name = DB_USERNAME;
    $user_password = DB_PASSWORD;
    $conn = new PDO($db_name, $user_name, $user_password);
}catch (PDOException $e)
{
    echo "<h1>Bağlantı Hatası :".$e->getMessage()."</h1>";
    echo "<h1><mark>Lütfen bağlantı dosyasında ki veritabanı parametrelerinizi Kontrol edin!</mark></h1>";
}


?>
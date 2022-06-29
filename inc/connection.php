<?php
// $dsn ="mysql:host=".DB_HOST.";dbname=".DB_NAME;
$dsn ="mysql:host=localhost;dbname=aptechecommerce";
$username = DB_USER;
$password = DB_PASSWORD;
$options = [];

try {
    $db = new PDO($dsn,$username,$password,$options);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo 'Connected';
} catch (PDOException $e) {
    throw $e;
}
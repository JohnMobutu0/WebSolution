<?php
$host = 'db.xkidczcjmixoqftilvqz.supabase.co';
$db   = 'postgres';
$user = 'postgres';
$pass = 'Narut0+Asta';
$port = '5432';

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

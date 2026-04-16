<?php
$host = 'db';
$db   = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASSWORD');

try {
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h1>HoldTracker 📈</h1>";
    echo "<p style='color: green;'>✅ Conexão com o banco de dados estabelecida com sucesso!</p>";
    echo "<p>Tempo no mercado bate o timing do mercado. O ambiente local está pronto.</p>";
} catch (PDOException $e) {
    echo "<h1>HoldTracker 📈</h1>";
    echo "<p style='color: red;'>❌ Erro ao conectar no banco de dados:</p>";
    echo $e->getMessage();
}

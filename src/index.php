<?php
echo "Docker toimii!<br>";

try {
    $pdo = new PDO(
        'mysql:host=db; charset=utf8',
        'user',
        'pass'
    );
    echo "Tietokantayhteys toimii!<br>";
} catch (PDOException $e) {
    echo "Virhe: " . $e->getMessage();
}
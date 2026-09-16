<?php
$pdo = new PDO(
    "mysql:host=db;port=3306;dbname=productbd;charset=utf8mb4",
    "root",
    "root"
);

header("Content-Type: application/json");

switch($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        $sql = "SELECT * FROM products";
        $stmt = $pdo->query($sql);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($products);
        break;

    case 'POST':
        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        $stmt = $pdo->prepare("INSERT into products (name, price) values (:name, :price)");
        $stmt->execute([
            ':name' => $data['name'],
            ':price' => $data['price']
        ]);

        echo json_encode([
            'success' => 'true'
        ]);
        break;

    default:
        http_response_code(405);
        echo json_encode('Error: Method not supported');
        break;
}


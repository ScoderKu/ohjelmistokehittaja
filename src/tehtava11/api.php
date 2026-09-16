<?php
$pdo = new PDO(
    "mysql:host=db;port=3306;dbname=productbd;charset=utf8mb4",
    "root",
    "root"
);

header("Content-Type: application/json");

switch($_SERVER['REQUEST_METHOD']) {
    case 'get':
        $sql = "SELECT * FROM products";
        $stmt = $pdo->query($sql);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

        echo json_encode($products);
        break;

    case 'post':
        $json = file_get_contents('php://input');
        $data = json_decode($json);

        $stmt = $pdo->prepare("INSERT into products (name, price) values (:name, :price)");
        $stmt->execute([
            ':name' => $data['name'],
            ':price' => $data['data']
        ]);

        //echo json_encode('Toimii!');
        break;

    default:
        http_response_code(405);
        echo json_encode('Error: Method not support');
        break;
}
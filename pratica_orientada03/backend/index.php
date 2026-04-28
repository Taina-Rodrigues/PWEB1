<?php
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

<<<<<<< HEAD
<<<<<<< HEAD
require_once __DIR__ . '/../models/DescontoInterface.php';
require_once __DIR__ . '/../models/SubjectInterface.php';
require_once __DIR__ . '/../models/ObserverInterface.php';
require_once __DIR__ . '/../models/Produto.php';
require_once __DIR__ . '/../models/ItemPedido.php';
require_once __DIR__ . '/../models/Pedido.php';
require_once __DIR__ . '/../models/DescontoNenhum.php';
require_once __DIR__ . '/../models/DescontoPromocional.php';
=======
=======
require_once __DIR__ . '/../models/DescontoInterface.php';
require_once __DIR__ . '/../models/SubjectInterface.php';
require_once __DIR__ . '/../models/ObserverInterface.php';
>>>>>>> 9507b8d (Corrige rota backend e ordem de inclusão de interfaces)
require_once __DIR__ . '/../models/Produto.php';
require_once __DIR__ . '/../models/ItemPedido.php';
require_once __DIR__ . '/../models/Pedido.php';
require_once __DIR__ . '/../models/DescontoNenhum.php';
require_once __DIR__ . '/../models/DescontoPromocional.php';
<<<<<<< HEAD
require_once __DIR__ . '/../models/ObserverInterface.php';
require_once __DIR__ . '/../models/SubjectInterface.php';
>>>>>>> 42d89d5 (Implementação do backend em PHP)
=======
>>>>>>> 9507b8d (Corrige rota backend e ordem de inclusão de interfaces)
require_once __DIR__ . '/../models/WhatsAppObserver.php';
require_once __DIR__ . '/../services/ProdutoFactory.php';
require_once __DIR__ . '/../services/DescontoFactory.php';
require_once __DIR__ . '/../repositories/PedidoRepository.php';
require_once __DIR__ . '/../controllers/PedidoController.php';

$controller = new PedidoController(
    PedidoRepository::getInstance(),
    new DescontoFactory(),
    new ProdutoFactory()
);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = preg_replace('#/backend/index\.php#', '', $uri);

try {
    if (preg_match('#/pedidos$#', $uri)) {
        switch ($_SERVER['REQUEST_METHOD']) {
            case 'GET':
                echo json_encode($controller->listar());
                break;
            case 'POST':
                $dados = json_decode(file_get_contents('php://input'), true) ?: [];
                echo json_encode($controller->criar($dados));
                break;
            case 'DELETE':
                parse_str($_SERVER['QUERY_STRING'], $params);
                $id = isset($params['id']) ? (int)$params['id'] : 0;
                echo json_encode($controller->excluir($id));
                break;
            default:
                http_response_code(405);
                echo json_encode(['error' => 'Método HTTP não permitido']);
                break;
        }
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Rota não encontrada']);
    }
} catch (Exception $ex) {
    http_response_code(400);
    echo json_encode(['error' => $ex->getMessage()]);
}

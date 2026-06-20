<?php

require_once __DIR__ . '/../models/DescontoInterface.php';
require_once __DIR__ . '/../models/SubjectInterface.php';
require_once __DIR__ . '/../models/ObserverInterface.php';
require_once __DIR__ . '/../models/Produto.php';
require_once __DIR__ . '/../models/ItemPedido.php';
require_once __DIR__ . '/../models/Pedido.php';
require_once __DIR__ . '/../models/DescontoPromocional.php';
require_once __DIR__ . '/../models/DescontoNenhum.php';

$produto = new Produto('pastel', 'Pastel', 8.50);
$item = new ItemPedido($produto, 2);
$pedido = new Pedido(1, new DescontoNenhum());
$pedido->addItem($item);

assert($pedido->getTotal() === 17.0, 'O total deve ser 17.0');
assert(abs($pedido->getTotalComDesconto() - 17.0) < 0.001, 'O total com desconto deve ser igual ao total quando não há desconto');

$pedidoComDesconto = new Pedido(2, new DescontoPromocional());
$pedidoComDesconto->addItem(new ItemPedido(new Produto('refrigerante', 'Refrigerante', 5.00), 11));
assert(abs($pedidoComDesconto->getTotal() - 55.0) < 0.001, 'O total deve ser 55.0');
assert(abs($pedidoComDesconto->getTotalComDesconto() - 49.5) < 0.001, 'O valor com desconto deve ser 49.5');

echo "Todos os testes passaram.\n";

<?php

class PedidoRepository
{
    private static ?PedidoRepository $instance = null;
    private string $filePath;

    private function __construct()
    {
        $this->filePath = __DIR__ . '/../project/pedidos.json';
        if (!file_exists($this->filePath)) {
            file_put_contents($this->filePath, json_encode([], JSON_PRETTY_PRINT));
        }
    }

    public static function getInstance(): PedidoRepository
    {
        if (self::$instance === null) {
            self::$instance = new PedidoRepository();
        }

        return self::$instance;
    }

    public function findAll(): array
    {
        $content = file_get_contents($this->filePath);
        return json_decode($content, true) ?: [];
    }

    public function save(array $pedidoData): array
    {
        $pedidos = $this->findAll();
        $pedidoData['id'] = $this->getNextId($pedidos);
        $pedidos[] = $pedidoData;
        file_put_contents($this->filePath, json_encode($pedidos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        return $pedidoData;
    }

    public function delete(int $id): bool
    {
        $pedidos = $this->findAll();
        $filtrados = array_filter($pedidos, fn($item) => $item['id'] !== $id);
        if (count($filtrados) === count($pedidos)) {
            return false;
        }

        file_put_contents($this->filePath, json_encode(array_values($filtrados), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
        return true;
    }

    private function getNextId(array $pedidos): int
    {
        if (empty($pedidos)) {
            return 1;
        }

        $ids = array_column($pedidos, 'id');
        return max($ids) + 1;
    }
}

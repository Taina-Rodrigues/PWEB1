<?php

class Pedido implements SubjectInterface
{
    private int $id;
    private array $itens = [];
    private DescontoInterface $descontoStrategy;
    private array $observers = [];
    private string $clienteNome;

    public function __construct(int $id, DescontoInterface $descontoStrategy, string $clienteNome = 'Cliente')
    {
        $this->id = $id;
        $this->descontoStrategy = $descontoStrategy;
        $this->clienteNome = $clienteNome;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getClienteNome(): string
    {
        return $this->clienteNome;
    }

    public function addItem(ItemPedido $item): void
    {
        $this->itens[] = $item;
    }

    public function getItens(): array
    {
        return $this->itens;
    }

    public function getTotal(): float
    {
        return array_reduce($this->itens, fn($total, ItemPedido $item) => $total + $item->getSubtotal(), 0.0);
    }

    public function getTotalComDesconto(): float
    {
        return $this->descontoStrategy->calcular($this->getTotal());
    }

    public function getDescontoDescricao(): string
    {
        return $this->descontoStrategy->getDescricao();
    }

    public function attach(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    public function notify(): array
    {
        $notifications = [];
        foreach ($this->observers as $observer) {
            $notifications[] = $observer->update($this);
        }

        return $notifications;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'cliente' => $this->clienteNome,
            'itens' => array_map(fn(ItemPedido $item) => $item->toArray(), $this->itens),
            'total' => $this->getTotal(),
            'totalComDesconto' => $this->getTotalComDesconto(),
            'desconto' => $this->getDescontoDescricao(),
        ];
    }
}

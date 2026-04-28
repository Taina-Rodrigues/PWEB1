<?php

class ProdutoFactory
{
    public function criarProduto(string $codigo): Produto
    {
        return match ($codigo) {
            'pastel' => new Produto('pastel', 'Pastel', 8.50),
            'caldo' => new Produto('caldo', 'Caldo de Cana', 6.00),
            'refrigerante' => new Produto('refrigerante', 'Refrigerante', 5.00),
            'suco' => new Produto('suco', 'Suco Natural', 7.50),
            default => throw new InvalidArgumentException('Produto inválido: ' . $codigo),
        };
    }
}

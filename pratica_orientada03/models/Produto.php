<?php

class Produto
{
    private string $codigo;
    private string $nome;
    private float $preco;

    public function __construct(string $codigo, string $nome, float $preco)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getCodigo(): string
    {
        return $this->codigo;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function toArray(): array
    {
        return [
            'codigo' => $this->codigo,
            'nome' => $this->nome,
            'preco' => $this->preco,
        ];
    }
}

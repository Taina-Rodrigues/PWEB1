<?php

class DescontoPromocional implements DescontoInterface
{
    public function calcular(float $valor): float
    {
        if ($valor >= 50.0) {
            return $valor * 0.90;
        }

        return $valor;
    }

    public function getDescricao(): string
    {
        return '10% para pedidos a partir de R$ 50,00';
    }
}

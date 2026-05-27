<?php

class DescontoNenhum implements DescontoInterface
{
    public function calcular(float $valor): float
    {
        return $valor;
    }

    public function getDescricao(): string
    {
        return 'Sem desconto';
    }
}

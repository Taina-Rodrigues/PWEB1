<?php

interface DescontoInterface
{
    public function calcular(float $valor): float;
    public function getDescricao(): string;
}

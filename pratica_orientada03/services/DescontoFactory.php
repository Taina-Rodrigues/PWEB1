<?php

class DescontoFactory
{
    public function criarDesconto(string $tipo): DescontoInterface
    {
        return match (strtolower($tipo)) {
            'promocional', '10%' => new DescontoPromocional(),
            default => new DescontoNenhum(),
        };
    }
}

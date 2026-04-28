<?php

class WhatsAppObserver implements ObserverInterface
{
    private string $alvo;
    private string $telefone;

    public function __construct(string $alvo, string $telefone)
    {
        $this->alvo = $alvo;
        $this->telefone = preg_replace('/[^0-9]/', '', $telefone);
    }

    public function update(SubjectInterface $subject): array
    {
        if (!($subject instanceof Pedido)) {
            return [];
        }

        $texto = $this->montarTexto($subject);
        $link = 'https://wa.me/' . $this->telefone . '?text=' . rawurlencode($texto);

        return [
            'tipo' => $this->alvo,
            'telefone' => $this->telefone,
            'mensagem' => $texto,
            'link' => $link,
        ];
    }

    private function montarTexto(Pedido $pedido): string
    {
        $linhas = [
            "Pedido #{$pedido->getId()}",
            "Cliente: {$pedido->getClienteNome()}",
            'Itens:'
        ];

        foreach ($pedido->getItens() as $item) {
            $produto = $item->getProduto();
            $linhas[] = "- {$item->getQuantidade()}x {$produto->getNome()} (R$ {$produto->getPreco()})";
        }

        $linhas[] = "Total: R$ " . number_format($pedido->getTotal(), 2, ',', '.');
        $linhas[] = "Total com desconto: R$ " . number_format($pedido->getTotalComDesconto(), 2, ',', '.');
        $linhas[] = "Desconto: {$pedido->getDescontoDescricao()}";

        return implode("\n", $linhas);
    }
}

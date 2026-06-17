<?php

class PedidoController
{
    private PedidoRepository $repository;
    private DescontoFactory $descontoFactory;
    private ProdutoFactory $produtoFactory;

    public function __construct(PedidoRepository $repository, DescontoFactory $descontoFactory, ProdutoFactory $produtoFactory)
    {
        $this->repository = $repository;
        $this->descontoFactory = $descontoFactory;
        $this->produtoFactory = $produtoFactory;
    }

    public function listar(): array
    {
        return $this->repository->findAll();
    }

    public function criar(array $dados): array
    {
        $desconto = $this->descontoFactory->criarDesconto($dados['desconto'] ?? 'nenhum');
        $pedido = new Pedido(0, $desconto, $dados['cliente'] ?? 'Cliente');

        foreach ($dados['itens'] as $item) {
            $produto = $this->produtoFactory->criarProduto($item['produto']);
            $pedido->addItem(new ItemPedido($produto, (int)$item['quantidade']));
        }

        $pedido->attach(new WhatsAppObserver('cliente', $dados['clienteTelefone'] ?? '5511999999999'));
        $pedido->attach(new WhatsAppObserver('estabelecimento', $dados['estabelecimentoTelefone'] ?? '5511988888888'));

        $pedidoSalvo = $this->repository->save($pedido->toArray());
        $notificacoes = $pedido->notify();

        return [
            'pedido' => $pedidoSalvo,
            'notificacoes' => $notificacoes,
        ];
    }

    public function excluir(int $id): array
    {
        $excluido = $this->repository->delete($id);
        return ['deleted' => $excluido];
    }
}

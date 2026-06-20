const apiUrl = '../backend/index.php/pedidos';
let itensPedido = [];

function montarLista() {
  const lista = document.getElementById('lista');
  lista.innerHTML = '';

  itensPedido.forEach((item, index) => {
    const li = document.createElement('li');
    li.textContent = `${item.quantidade}x ${item.nome} - R$ ${item.preco.toFixed(2)} = R$ ${(item.preco * item.quantidade).toFixed(2)}`;
    const botaoRemover = document.createElement('button');
    botaoRemover.textContent = 'Remover';
    botaoRemover.className = 'remover';
    botaoRemover.addEventListener('click', () => {
      itensPedido.splice(index, 1);
      montarLista();
      atualizarTotal();
    });
    li.appendChild(botaoRemover);
    lista.appendChild(li);
  });
}

function atualizarTotal() {
  const total = itensPedido.reduce((acc, item) => acc + item.quantidade * item.preco, 0);
  document.getElementById('total').textContent = total.toFixed(2);
}

function adicionar() {
  const produto = document.getElementById('produto').value;
  const nome = document.getElementById('produto').selectedOptions[0].textContent;
  const preco = Number(document.getElementById('produto').selectedOptions[0].dataset.preco);
  const quantidade = Number(document.getElementById('qtd').value) || 1;

  itensPedido.push({ produto, nome, preco, quantidade });
  montarLista();
  atualizarTotal();
}

async function finalizar() {
  if (itensPedido.length === 0) {
    alert('Adicione pelo menos um item ao pedido.');
    return;
  }

  const pedidoData = {
    cliente: document.getElementById('cliente').value || 'Cliente',
    clienteTelefone: document.getElementById('telefone-cliente').value || '5511999999999',
    estabelecimentoTelefone: '5511988888888',
    desconto: document.getElementById('desconto').value,
    itens: itensPedido.map(item => ({ produto: item.produto, quantidade: item.quantidade })),
  };

  try {
    const response = await fetch(apiUrl, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify(pedidoData),
    });

    const resultado = await response.json();
    if (!response.ok) {
      throw new Error(resultado.error || 'Erro ao enviar pedido');
    }

    const notificacoes = resultado.notificacoes || [];
    exibirWhatsApp(notificacoes);
    itensPedido = [];
    montarLista();
    atualizarTotal();
    alert('Pedido enviado e salvo com sucesso!');
  } catch (error) {
    alert('Falha ao processar pedido: ' + error.message);
  }
}

function exibirWhatsApp(notificacoes) {
  const container = document.getElementById('whatsappLinks');
  container.innerHTML = '';

  notificacoes.forEach(info => {
    const link = document.createElement('a');
    link.href = info.link;
    link.target = '_blank';
    link.textContent = `Enviar pedido via WhatsApp para ${info.tipo}`;
    link.className = 'whatsapp-link';
    container.appendChild(link);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  document.getElementById('adicionar').addEventListener('click', adicionar);
  document.getElementById('finalizar').addEventListener('click', finalizar);
  montarLista();
  atualizarTotal();
});

Parte 1 – Análise do Sistema Real
1.	Qual é o objetivo do sistema? 
Permitir que clientes visualizem os produtos que tem na pizzaria de forma online, onde o cliente pode pedir seu produto sem ir ao estabelecimento.

2.	Quais funcionalidades ele oferece? 
Visualização do cardápio, produtos ofertados, seleção dos itens, podendo adicionar no carrinho, seus respectivos valores, finalização de pedido e as redes sociais da pizzaria.

3.	Como o usuário interage com o sistema? 
Na escolha dos produtos, através da navegação pelo site, onde com clicks ele seleciona, adiciona e finaliza a compra.

4.	Como os produtos estão organizados? 
Separação dos produtos por categoria, porém tudo em uma só página, por exemplo; tem os tamanhos das pizzas, e na mesma página já tem hambúrgueres, vitaminas. Não está bem separado. 
Parte 2 – Análise de Arquitetura
•	Tipo de arquitetura
Cliente servidor (web), porque a aplicação é acessada via navegador e apresenta uma interface visual dinâmica, facilitando que o cliente se comunique com um servidor responsável pelo processamento das operações.

•	Possível divisão em camadas 
Tem a camada de apresentação (Frontend): deviso a exibição do cardápio, botões de navegação (categorias, combos, promoções) e carrinho. 
Camada de lógica (Backend): processamento de pedidos, controle do carrinho e regras de negócio.
 E a camada de dados: produtos, categorias e peços.

•	Existência de separação de responsabilidades
Uma separação básica, pois não é possível garantir que esteja bem estruturada internamente, por exemplo; interface mostra produtos e o sistema controla pedido, simples. Como não estamos vendo o código, a análise está sendo feita apenas visivelmente.
Parte 3 – Análise de Design
Coesão
A coesão é moderada a boa, pois cada parte do sistema possui uma função clara, como categorias, produtos e carrinho, indicando boa organização.
Acoplamento 
O acoplamento é moderado, já que a interface depende da estrutura dos produtos, podendo ser afetada por mudanças no backend.

Separação de responsabilidades
Existe, mas pode melhorar, pois os produtos estão organizados por categorias, porém não há garantia de separação clara entre lógica e interface. Ou seja, as conclusões foram obtidas por meio de engenharia reversa, pois não há acesso ao código-fonte.

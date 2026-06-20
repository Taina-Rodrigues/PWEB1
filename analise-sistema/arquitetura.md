Parte 4 – Padrões de Projeto
1.	O sistema aparenta utilizar padrões? 
O sistema aparenta utilizar padrões de forma implícita, especialmente conceitos próximos ao MVC, mesmo sem acesso ao código-fonte para confirmação.

2.	Onde poderiam existir Factory, Singleton e MVC? 
O padrão MVC pode estar presente na separação entre interface (View), dados dos produtos (Model) e ações do usuário (Controller). O Factory poderia ser usado na criação de diferentes tipos de produtos, enquanto o Singleton poderia estar no controle do carrinho de compras.

3.	Onde esses padrões poderiam ser aplicados?
Poderiam ser aplicados para melhorar a organização do sistema, facilitar a reutilização de código e tornar a manutenção mais eficiente.
----------------------------------------
Questão 8 – Proposta de Arquitetura
Organização em camadas ou MVC
Propõe-se a utilização do padrão MVC, separando o sistema em Model (dados e regras de negócio), View (interface do usuário) e Controller (controle das ações). Essa organização melhora a estrutura e facilita a manutenção.

Separação de responsabilidades
Cada camada do sistema deve ter uma função específica: o Model gerencia os dados, a View exibe as informações e o Controller processa as ações do usuário. Isso evita sobrecarga de funções em um único componente.

Componentes principais
Os principais componentes do sistema seriam: módulo de produtos, módulo de categorias, módulo de carrinho, módulo de pedidos e a interface do usuário. Cada componente deve atuar de forma independente.

----------------------------------------
Questão 9 – Aplicação de Padrões
Factory
O padrão Factory pode ser aplicado na criação de objetos Produto, permitindo instanciar diferentes tipos (como pizza ou hambúrguer) de forma padronizada, facilitando a expansão do sistema.

Singleton
O padrão Singleton pode ser aplicado no carrinho de compras, garantindo que exista apenas uma instância durante a sessão do usuário, evitando inconsistências nos dados.
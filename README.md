# lab_migrations_taina_rodrigues

Projeto Laravel para o laboratório de migrations.

## Instruções de entrega
- Este repositório deve ser público no GitHub.
- O projeto Laravel está dentro da pasta `lab_migrations/`.
- O arquivo `lab_migrations/.env` não deve ser versionado; ele já está ignorado pelo `.gitignore` do Laravel.

## Estrutura do repositório
- `lab_migrations/`: projeto Laravel criado com `composer create-project laravel/laravel lab_migrations`
- `lab_migrations/.env.example`: modelo de configuração que deve permanecer no repositório

## Observações
- Confirme que o repositório remoto no GitHub tem o nome `lab_migrations_taina_rodrigues`.
- Faça `git push origin main` depois de adicionar o remote correto.

## Branches de atividade
Use uma branch separada para cada atividade/prática conforme a convenção abaixo:
- `atividade/01-ambiente`
- `atividade/02-primeira-migration`
- `atividade/03-tipos-de-dados`
- `atividade/04-chave-estrangeira`
- `atividade/05-foreignid`
- `atividade/06-regras-exclusao`
- `atividade/07-alteracao-tabela`
- `atividade/08-status-migrations`
- `atividade/09-relacionamento-1n`
- `atividade/10-diagnostico-erros`
- `pratica/01-biblioteca`
- `pratica/02-sistema-academico`
- `pratica/03-gestao-projetos`

## Convenção de mensagens de commit
As mensagens de commit devem seguir o padrão Conventional Commits:
- `feat:` Criação de nova migration, model ou controller
- `fix:` Correção de erro em migration existente
- `refactor:` Refatoração de código já funcional
- `docs:` Adição ou edição de documentação (README)
- `test:` Adição de testes ou verificações
- `chore:` Configurações gerais (`.env.example`, `.gitignore`)

Exemplos:
- `git commit -m "feat: cria migration da tabela clientes com campos nome e email"`
- `git commit -m "feat: adiciona chave estrangeira foreignId em produtos"`
- `git commit -m "fix: corrige tipo do campo preco para decimal(8,2)"`
- `git commit -m "refactor: usa foreignId()->constrained() em vez de FK manual"`
- `git commit -m "docs: atualiza README com instrucoes de execucao"`

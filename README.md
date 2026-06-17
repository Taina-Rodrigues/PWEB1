# Lab Migrations Laravel

**Aluno:** Tainá Rodrigues dos Santos
**Disciplina:** Programação Web I
**Professor:** Renato William R. de Souza
**Semestre:** 2026.1

## Como executar
```bash
git clone https://github.com/Taina-Rodrigues/lab_migrations_taina_rodrigues.git
cd lab_migrations_taina_rodrigues/lab_migrations
cp .env.example .env
# Editar .env com as credenciais do banco
composer install
php artisan key:generate
php artisan migrate
```

## Atividades
| Atividade | Branch | Status |
| - | - | - |
| Atividade 1 Ambiente | `atividade/01-ambiente` | Concluída |
| Atividade 2 Primeira Migration | `atividade/02-primeira-migration` | Pendente |
| Atividade 3 Tipos de Dados | `atividade/03-tipos-de-dados` | Pendente |
| Atividade 4 Chave Estrangeira | `atividade/04-chave-estrangeira` | Pendente |
| Atividade 5 foreignId | `atividade/05-foreignid` | Pendente |
| Atividade 6 Regras de Exclusão | `atividade/06-regras-exclusao` | Pendente |
| Atividade 7 Alteração de Tabela | `atividade/07-alteracao-tabela` | Pendente |
| Atividade 8 Status Migrations | `atividade/08-status-migrations` | Pendente |
| Atividade 9 Relacionamento 1:N | `atividade/09-relacionamento-1n` | Pendente |
| Atividade 10 Diagnóstico de Erros | `atividade/10-diagnostico-erros` | Pendente |
| Prática 1 Biblioteca | `pratica/01-biblioteca` | Pendente |
| Prática 2 Sistema Acadêmico | `pratica/02-sistema-academico` | Pendente |
| Prática 3 Gestão de Projetos | `pratica/03-gestao-projetos` | Pendente |

## Pull Request
Cada atividade deve ser entregue em uma PR da branch da atividade para `main`.

### Modelo de descrição da PR
```markdown
## Atividade X [Nome da Atividade]
### O que foi implementado
- <descrição da migration e/ou alterações>
- Execução de `php artisan migrate` com sucesso
### Comandos executados
```bash
php artisan make:migration ...
php artisan migrate
php artisan migrate:status
```
### Evidência (saída do terminal)
<cole a saída do terminal aqui>
```
```

## Observações
- O arquivo `lab_migrations/.env` não deve ser versionado.
- O arquivo `lab_migrations/.env.example` deve permanecer no repositório.
- Existem branches locais criadas para cada atividade conforme a convenção exigida.

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

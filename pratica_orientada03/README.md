# Sistema de Pedidos

Arquitetura em camadas com backend PHP e frontend separado.

## Estrutura
- `/backend` - API PHP
- `/models` - classes de domínio
- `/services` - fábricas e estratégias
- `/controllers` - controlador de pedidos
- `/repositories` - persistência JSON
- `/frontend` - interface HTML/JS
- `/project/pedidos.json` - armazenamento de pedidos
- `/tests` - testes de cálculo de total e desconto

## Endpoints
- `GET /backend/index.php/pedidos` - lista pedidos
- `POST /backend/index.php/pedidos` - cria pedido
- `DELETE /backend/index.php/pedidos?id=1` - exclui pedido

## Como rodar

### Local
Abra `frontend/index.html` em um servidor HTTP ou execute via Docker.

### Docker
No diretório `pratica_orientada03`:

```bash
docker-compose up -d
```

Acesse `http://localhost:8080`.

### Testes
No diretório `pratica_orientada03`:

```bash
php tests/PedidoTest.php
```

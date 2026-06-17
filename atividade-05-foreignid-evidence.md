# Atividade 05 - Uso do foreignId

## Comandos executados
```bash
php artisan make:migration create_categorias_table --create=categorias
php artisan make:migration create_produtos_table --create=produtos
php artisan make:migration add_categoria_id_foreignid_to_produtos_table --table=produtos
php artisan migrate
php artisan migrate:status
```

## Comparacao de abordagens
A abordagem manual usa `$table->unsignedBigInteger("categoria_id");` e `$table->foreign("categoria_id")->references("id")->on("categorias");`. A sintaxe moderna `foreignId()->constrained()` é mais curta, automática e garante a criação de índice e chave estrangeira com menos código.

## Saida do php artisan migrate:status

Dropped all tables successfully.
Migration table created successfully.
Migrating: 2014_10_12_000000_create_users_table
Migrated:  2014_10_12_000000_create_users_table (9.53ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (6.55ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (7.73ms)
Migrating: 2019_12_14_000001_create_personal_access_tokens_table
Migrated:  2019_12_14_000001_create_personal_access_tokens_table (13.80ms)
Migrating: 2026_06_17_022220_add_categoria_id_foreignid_to_produtos_table
Migrated:  2026_06_17_022220_add_categoria_id_foreignid_to_produtos_table (0.06ms)
Migrating: 2026_06_17_022315_create_categorias_table
Migrated:  2026_06_17_022315_create_categorias_table (4.46ms)
Migrating: 2026_06_17_022318_create_produtos_table
Migrated:  2026_06_17_022318_create_produtos_table (4.20ms)
+------+----------------------------------------------------------------+-------+
| Ran? | Migration                                                      | Batch |
+------+----------------------------------------------------------------+-------+
| Yes  | 2014_10_12_000000_create_users_table                           | 1     |
| Yes  | 2014_10_12_100000_create_password_resets_table                 | 1     |
| Yes  | 2019_08_19_000000_create_failed_jobs_table                     | 1     |
| Yes  | 2019_12_14_000001_create_personal_access_tokens_table          | 1     |
| Yes  | 2026_06_17_022220_add_categoria_id_foreignid_to_produtos_table | 1     |
| Yes  | 2026_06_17_022315_create_categorias_table                      | 1     |
| Yes  | 2026_06_17_022318_create_produtos_table                        | 1     |
+------+----------------------------------------------------------------+-------+

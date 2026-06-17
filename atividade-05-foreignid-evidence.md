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
Migrated:  2014_10_12_000000_create_users_table (8.68ms)
Migrating: 2014_10_12_100000_create_password_resets_table
Migrated:  2014_10_12_100000_create_password_resets_table (13.95ms)
Migrating: 2019_08_19_000000_create_failed_jobs_table
Migrated:  2019_08_19_000000_create_failed_jobs_table (6.82ms)
Migrating: 2019_12_14_000001_create_personal_access_tokens_table
Migrated:  2019_12_14_000001_create_personal_access_tokens_table (10.34ms)
Migrating: 2026_06_17_022220_add_categoria_id_foreignid_to_produtos_table

   Illuminate\Database\QueryException 

  SQLSTATE[HY000]: General error: 1 no such table: produtos (SQL: insert into "produtos_new" ("nome", "categoria_id") select "nome", "categoria_id" from "produtos")

  at vendor/laravel/framework/src/Illuminate/Database/Connection.php:712
    708▕         // If an exception occurs when attempting to run a query, we'll format the error
    709▕         // message to include the bindings with SQL, which will make this exception a
    710▕         // lot more helpful to the developer instead of just the database's errors.
    711▕         catch (Exception $e) {
  ➜ 712▕             throw new QueryException(
    713▕                 $query, $this->prepareBindings($bindings), $e
    714▕             );
    715▕         }
    716▕     }

      [2m+6 vendor frames [22m
  7   database/migrations/2026_06_17_022220_add_categoria_id_foreignid_to_produtos_table.php:19
      Illuminate\Database\Query\Builder::insertUsing()

      [2m+33 vendor frames [22m
  41  artisan:37
      Illuminate\Foundation\Console\Kernel::handle()
+------+----------------------------------------------------------------+-------+
| Ran? | Migration                                                      | Batch |
+------+----------------------------------------------------------------+-------+
| Yes  | 2014_10_12_000000_create_users_table                           | 1     |
| Yes  | 2014_10_12_100000_create_password_resets_table                 | 1     |
| Yes  | 2019_08_19_000000_create_failed_jobs_table                     | 1     |
| Yes  | 2019_12_14_000001_create_personal_access_tokens_table          | 1     |
| No   | 2026_06_17_022220_add_categoria_id_foreignid_to_produtos_table |       |
| No   | 2026_06_17_022315_create_categorias_table                      |       |
| No   | 2026_06_17_022318_create_produtos_table                        |       |
+------+----------------------------------------------------------------+-------+

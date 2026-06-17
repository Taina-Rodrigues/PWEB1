## Atividade 8 — Status das Migrations

### Significado das colunas
- Ran?: indica se a migration foi executada (Yes) ou não (No)
- Batch: número do lote de execução
- Migration: nome do arquivo de migration

### Evidência — antes do rollback
| Ran? | Migration | Batch |
|------|-----------|-------|
| Yes  | 2014_10_12_000000_create_users_table | 1 |
| Yes  | 2014_10_12_100000_create_password_resets_table | 1 |
| Yes  | 2019_08_19_000000_create_failed_jobs_table | 1 |
| Yes  | 2019_12_14_000001_create_personal_access_tokens_table | 1 |

### Evidência — após rollback --step=2
| Ran? | Migration | Batch |
|------|-----------|-------|
| Yes  | 2014_10_12_000000_create_users_table | 1 |
| Yes  | 2014_10_12_100000_create_password_resets_table | 1 |
| No   | 2019_08_19_000000_create_failed_jobs_table | |
| No   | 2019_12_14_000001_create_personal_access_tokens_table | |
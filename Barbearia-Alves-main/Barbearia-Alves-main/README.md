# Barbearia Alves

<!-- ...existing content... -->

## Configuração do Banco de Dados

1. Crie um banco de dados com o nome `barbearia_alves`.
2. Crie uma tabela `clientes` com as seguintes colunas:
   - `id` INT AUTO_INCREMENT PRIMARY KEY
   - `nome` VARCHAR(255) NOT NULL
   - `email` VARCHAR(255) NOT NULL UNIQUE
   - `telefone` VARCHAR(20) NOT NULL UNIQUE
   - `senha` VARCHAR(255) NOT NULL
3. Crie uma tabela `table_ba` com as seguintes colunas:
   - `id` INT AUTO_INCREMENT PRIMARY KEY
   - `nome` VARCHAR(255) NOT NULL
   - `email` VARCHAR(255) NOT NULL UNIQUE
   - `telefone` VARCHAR(20) NOT NULL UNIQUE
   - `senha` VARCHAR(255) NOT NULL

```sql
CREATE DATABASE barbearia_alves;
USE barbearia_alves;

CREATE TABLE table_ba (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(320) NOT NULL UNIQUE,
    telefone VARCHAR(20) NOT NULL UNIQUE,
    senha VARCHAR(8) NOT NULL
);
```

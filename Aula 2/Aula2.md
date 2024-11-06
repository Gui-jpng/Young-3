# AULA 2

## CRIAR UM BANCO DE DADOS

```sql
CREATE DATABASE nome_do_bando_dados
```
## TABELA
### CRIAR UMA TABELA
```sql
CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
   ....
);
```

### ALTERANDO UMA TABELA
**ADICIONAR COLUNA**
```sql
ALTER TABLE table_name
ADD column_name datatype;
```

**DELETAR COLUNA**
```sql
ALTER TABLE table_name
DROP COLUMN column_name;
```

**RENOMEAR COLUNA**
```sql
ALTER TABLE table_name
RENAME COLUMN old_name to new_name;
```

**ALTERAR TIPO DE DADO DA COLUNA**
```SQL
ALTER TABLE table_name
ALTER COLUMN column_name datatype;
```
**DADOS NÃO NULOS**
```sql
CREATE TABLE Persons (
    ID int NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255) NOT NULL,
    Age int
);
```

**EX**: alterando uma coluna para não aceitar dados em branco
```SQL
ALTER TABLE jogadores MODIFY COLUMN id int NOT NULL;
```

**DADOS UNICOS**
```sql
CREATE TABLE Persons (
    ID int NOT NULL UNIQUE
);
```
ou
```sql
CREATE TABLE Persons (
    ID int NOT NULL,
    UNIQUE (ID)
);
```

**EX**: Alterarndo uma coluna para receber apenas dados unicos

```sql
ALTER TABLE jogadores MODIFY COLUMN id int NOT NULL UNIQUE;
```

### INSERINDO DADOS
```SQL
INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);
```


### Exercícios SQL - Criação e Manipulação de Bancos de Dados e Tabelas

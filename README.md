# Rosa do Bem

## WIREFRAME do projeto
https://www.figma.com/file/4Hoe4dsIeCmhmT8KvKRAv7/PROJETO-INTEGRADOR


## Descrição
Aplicativo web para informações, cadastro e controle de agendamentos de exames disponbilizado pela camapanha Rosa do Bem de Americana - SP. 
- Cadastro de pacientes
    - Inclusão
    - Alteração
    - Exclusão
    - Listagem de todos as pacientes
    - Filtro por idade e bairro

- Cadastro de agenda
    - Agendamento de paciente
    - Alteração em uma agendamento
    - Exclusão de um agendamento
    - Listagem de todos os agendamentos
    - Filtro de quantidade de exames feitos e quem compareceu. 

## Tecnologias (Stack)
- Apache (XAMPP)
- PHP
- MariaDB
- HTML
- CSS
- Javascript
- jQuery
- Bootstrap

---
## SQL - Banco de dados
### Criação do banco de dados
```sql
CREATE DATABASE cadastro CHARACTER SET utf8 COLLATE utf8_general_ci;
```

### Criação da tabela médicos

```sql
CREATE TABLE inscricao (id int NOT NULL AUTO_INCREMENT PRIMARY KEY, nome varchar(100), rg varchar(50), cpf varchar(50), dataNasci date, cartaoSUS varchar(50), telefone varchar(25), celular varchar(25), celularRecado varchar(25), parentesco varchar(25), email varchar(100), confirmarEmail varchar(100), cep varchar(15), rua varchar(100), num int, compl varchar(100), bairro varchar(100), cidade varchar(30), estado varchar(25), termo varchar(15));

```

# API_RH
Atividade de criação de API

# Rotas de requisição (Funcionários)

## Post
### Adição de dados na tabela de funcionários
- Link: http://localhost/api/funcionarios

    - ```
        "name":"(nome do funcionário)"
        "age":"(idade do funcionário em número)"
        "cpf":"(Número do cpf do funcionário)"
        "number":"(Número de contato do funcionário)"
        "address":"(Endereço do funcionário)"
      ```

## Get
### Lista de todos os funcionários

- Link: http://localhost/api/funcionarios

### Lista de todos os funcionarios e seus departamentos

- Link: http://localhost/api/funcionarios/departamentos

### Dados de um funcionário especifico

- Link: http://localhost/api/funcionarios/{id_funcioario}

### Dados de um funcionário específico e seu departamento respectivo

- Link: http://localhost/api/funcionarios/{id_funcionario}/departamentos


## Patch
### Atualização de dados de funcionários

- Link: http://localhost/api/funcionarios/{id_funcinario}

    - ```
        Todos os campos opcionais

        "name":"(nome do funcionário)"
        "age":"(idade do funcionário em número)"
        "cpf":"(Número do cpf do funcionário)"
        "number":"(Número de contato do funcionário)"
        "address":"(Endereço do funcionário)"
      ```

## Delete
### Remoção de dados da tabela de funcionários

- Link: http://localhost/api/funcionarios/{id_funcionario}


# Rotas de requisição (Departamentos)

## Post
### Adição de dados na tabela de departamentos
- Link: http://localhost/api/departamentos

    - ```
        "name":"(nome do funcionário)"
        "description":"(descrição do departamento)"
      ```

## Get
### Lista de todos os departamentos

- Link: http://localhost/api/departamentos

### Lista de todos os departamentos e seus funcionários

- Link: http://localhost/api/departamentos/funcionarios

### Dados de um departamento especifico

- Link: http://localhost/api/departamentos/{id_departamento}

### Valor de um departamento específico e seus funcionários

- Link: http://localhost/api/departamentos/{id_departamento}/funcionarios


## Patch
### Atualização de dados de departamentos

- Link: http://localhost/api/departamentos/{id_departamento}

    - ```
        Todos os campos opcionais

        "name":"(nome do funcionário)"
        "description":"(descrição do departamento)"
      ```

## Delete
### Remoção de dados da tabela de departamentos

- Link: http://localhost/api/departamentos/{id_departamento}

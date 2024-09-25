<<<<<<< HEAD
# Gerenciamento do Sistema de Merendas

```mermaid
flowchart TD
    Cliente --URL--> index.php
    index.php <--> r[routes]
    view <--> editar.php
    view <--> listar.php
    view <--> cadastrar.php
    c[conexao] --> controller
    r --> controller
    controller --> view
```

## Estrutura inicial das classes/tabelas

```mermaid
classDiagram
    Category 
    Product <|-- Category
    Customer <|-- Address
    Address 
    Order <|-- Item
    Order <|-- Customer
    Item <|-- Product

    class Order {
        Customer
        Item
    }

    class Item {
        Product
        quantity
    }

    class Category {
        - name (Bebidas, Pizzas, Salgados, Docs)
        - description (texto longo)
        - image (url da imagem)
    }

    class Product {
        - name
        - Category
        - images
        - quantity
        - price
        - available
    }

    class Customer {
        - name
        - Address
        - email
        - phone
        - photo
        - status
    }
    
    class Address {
        - city
        - street
    }
```


## Como Contribuir

- Passo 1: Faca o clone do repositorio
```bash
git clone git@github.com:digitalcollege-classes/php-merenda.git
```


- passo 2: Voltar pro seu branch principal
```bash
git checkout main
```

- passo 3: Atualizar seu branch principal
```bash
git pull origin main
```

- passo 4: Criar um novo ramo/branch
```bash
git checkout -b nome-da-branch
```

- passo 5: Faz o que tem que fazer

- passo 6: Commitar as mudancas feitas


=======
## Estrutura inicial das classes

```mermaid

```
>>>>>>> ac5ba28bd415a92c206fe173498f4b99dc5af8bb

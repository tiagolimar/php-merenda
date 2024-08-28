# Gerenciamento de Merendas

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
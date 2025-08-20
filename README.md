# Gerenciador de Produtos - Laravel

Sistema CRUD para gerenciamento de produtos desenvolvido em Laravel.

## Funcionalidades

- ✅ Criar novos produtos
- ✅ Listar produtos existentes  
- ✅ Visualizar detalhes do produto
- ✅ Editar produtos
- ✅ Excluir produtos
- ✅ Validação completa dos campos
- ✅ Interface responsiva com Bootstrap

## Requisitos

- PHP >= 8.0
- Composer
- MySQL
- Laravel >= 9.x

## Instalação

1. Clone o repositório
```bash
git clone [crud-produtos]
cd produtos-crud
```

2. Instale as dependências
```bash
composer install
```

3. Configure o banco de dados no arquivo `.env`
```env
DB_DATABASE=produtos_crud
DB_USERNAME=root  
DB_PASSWORD=
```

4. Execute as migrations
```bash
php artisan migrate
```

5. Inicie o servidor
```bash
php artisan serve
```

6. Acesse: http://localhost:8000

## Estrutura

- **Model:** `Produto` - Gerencia os dados dos produtos
- **Controller:** `ProdutoController` - Lógica CRUD completa
- **Views:** Interface Bootstrap responsiva
- **Validação:** Campos obrigatórios e tipos corretos
- **Rotas:** Resource routes nomeadas

## Campos do Produto

- **Nome:** String obrigatória (max 255)
- **Preço:** Decimal obrigatório (min 0)
- **Descrição:** Texto obrigatório

## Tecnologias Utilizadas

- Laravel 9.x
- PHP 8+
- MySQL
- Bootstrap 5
- Blade Templates

## Desenvolvido por

[Nícolas F. dos Reis] - Processo seletivo Memphis Network

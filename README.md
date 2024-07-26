Resumo do Projeto: CRUD de Produtos com Autenticação em Laravel
Objetivo

O projeto tem como objetivo criar um sistema de gerenciamento de produtos com autenticação de usuário. Os usuários devem poder se registrar, fazer login e realizar operações CRUD (Criar, Ler, Atualizar, Deletar) em produtos.
Estrutura do Projeto
Frontend

    Blade templates: Utilizados para criar a interface de usuário.
    Formulários: Formulários para login, registro e gerenciamento de produtos.

Backend

    Framework Laravel: Utilizado para gerenciar a aplicação.
    Autenticação: Implementada usando Laravel Breeze ou Laravel UI.
    Controladores: Gerenciam as operações CRUD e autenticação.
    Modelos Eloquent: Interagem com as tabelas de usuários e produtos no banco de dados.
    Rotas: Processam requisições relacionadas ao login, registro e CRUD de produtos.

Funcionalidades
Autenticação

    Registro de usuários.
    Login de usuários.
    Middleware de autenticação para proteger rotas.

CRUD de Produtos

    Criar: Formulário para adicionar novos produtos.
    Ler: Listagem de produtos.
    Atualizar: Formulário para editar produtos existentes.
    Deletar: Exclusão de produtos.

Estrutura de Diretórios

    /resources/views: Contém os templates Blade usados na interface de usuário.
    /app/Http/Controllers: Contém os controladores para autenticação e gerenciamento de produtos.
    /app/Models: Contém os modelos Eloquent para usuários e produtos.
    /routes/web.php: Contém as rotas para autenticação e operações CRUD de produtos.

    Instalação

Siga as instruções abaixo para configurar o projeto em sua máquina local.
Pré-requisitos

    PHP >= 7.3
    Composer
    Laravel >= 8.x
    MySQL

Passos para Instalação

    Clone o repositório:

    sh

git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio

Instale as dependências do Composer:

sh

composer install

Copie o arquivo .env.example para .env:

sh

cp .env.example .env

Configure o arquivo .env com as credenciais do banco de dados:

env

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco_de_dados
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

Gere a chave da aplicação:

sh

php artisan key:generate

Execute as migrações para criar as tabelas no banco de dados:

sh

php artisan migrate

(Opcional) Popule a tabela de produtos com dados de exemplo:

sh

php artisan db:seed --class=ProductSeeder

Instale o Laravel Breeze ou Laravel UI para a autenticação:

sh

composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate

Inicie o servidor de desenvolvimento:

sh

php artisan serve

Acesse a aplicação no seu navegador em http://localhost:8000.

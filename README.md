# Projeto-Locadora

Este projeto foi desenvolvido em 2022, durante o componente de Programação Web do curso técnico em informática. Hoje, formado, vejo este primeiro projeto como uma experiência marcante no aprendizado de desenvolvimento web completo (full stack), onde abordamos todas as etapas de construção de uma aplicação estruturada e organizada.

## Descrição

O Projeto-Locadora é uma aplicação web para gerenciar uma locadora de filmes. Ele permite o cadastro, edição, listagem e exclusão de filmes e usuários. O sistema foi desenvolvido utilizando PHP para o backend, MySQL para o banco de dados e Bootstrap para a interface do usuário.

## Funcionalidades

- **Autenticação de Usuários**: Login e logout de usuários.
- **Gerenciamento de Filmes**:
  - Cadastro de novos filmes.
  - Edição de filmes existentes.
  - Listagem de todos os filmes.
  - Exclusão de filmes.
- **Gerenciamento de Usuários**:
  - Cadastro de novos usuários.
  - Edição de usuários existentes.
  - Listagem de todos os usuários.
  - Exclusão de usuários.

## Tecnologias Utilizadas

- **Linguagem de Programação**: PHP
- **Banco de Dados**: MySQL
- **Framework CSS**: Bootstrap
- **JavaScript**: jQuery

## Estrutura do Projeto

```plaintext
landlord_project/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── js/
│   │   └── script.js
│   └── images/
├── includes/
│   ├── include_footer.php
│   ├── include_footer_listar.php
│   ├── include_header.php
│   ├── include_header_login.php
│   └── include_menu.php
├── sql/
│   └── locadora.sql
├── src/
│   ├── conexao_bd.php
│   ├── controle_filme.php
│   ├── controle_usuario.php
│   ├── crud_filme.php
│   ├── crud_usuario.php
│   └── functions.php
├── views/
│   ├── filme_criar.php
│   ├── filme_dados.php
│   ├── filme_edit.php
│   ├── filme_listar.php
│   ├── login.php
│   ├── usuario_dados.php
│   ├── usuario_listar.php
│   └── usuario_registrar.php
├── .gitattributes
└── [README.md](http://_vscodecontentref_/0)
```

## Instalação

1. Clone o repositório:

``git clone https://github.com/seu-usuario/projeto-locadora.git``

2. Importe o banco de dados:
* Importe o arquivo locadora.sql no seu servidor MySQL.

3. Configure a conexão com o banco de dados:
* Edite o arquivo src/conexao_bd.php com as informações do seu servidor MySQL.

4. Inicie o servidor:
* Coloque os arquivos do projeto no diretório raiz do seu servidor web (por exemplo, htdocs para XAMPP).

5. Acesse a aplicação:
* Abra o navegador e acesse http://localhost/projeto-locadora.

## Contato
### Nome: Kristian Frasson
### Email: kristianp.frasson@hotmail.com
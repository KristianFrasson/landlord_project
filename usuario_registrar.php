<?php include("include_header_login.php"); //Insere as informações de HTML comum a todas as páginas?>
<?php include("crud_usuario.php"); //Insere nesse arquivo as funções de CRUD com a Tabela do Banco de Dados ?>
<?php include("usuario_dados.php"); //Insere nesse arquivo a verredura das tuplas da tabela que estar armazenados em uma variável ?>

<div class="pen-title">
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Cadastro</h1>
    <form action="" method="POST">
      <div class="input-container">
        <input input type="text" id="nome" name="nome" required/>
        <label for="nome">Nome</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input input type="text" id="login" name="login" required/>
        <label for="login">Login</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="senha" name="senha" required/>
        <label for="senha">Senha</label>
        <input type="hidden" id="id" name="id"/>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" value="alterar_usuario" name="opcao" id="btnAlterar">Atualizar</button>
      </div>
    </form>

<?php include("include_footer.php"); //Insere as informações de HTML comum a todas as páginas?>
<?php include("controle_usuario.php"); //Utiliza esse arquivo para fazer as verificações se tem variáveis POST ou GET?>	
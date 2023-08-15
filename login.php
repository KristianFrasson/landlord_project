<?php include("include_header_login.php");?>
<?php include("crud_usuario.php"); ?>
<?php include("usuario_dados.php"); //Insere nesse arquivo a verredura das tuplas da tabela que estar armazenados em uma variável ?>


<div class="modal fade" id="erro_login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Erro de Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Login e Senha inválidos.
      </div>
      <div class="modal-footer">
        <a href="login.php" type="button" class="btn btn-primary">Tentar novamente</a>
      </div>
    </div>
  </div>
</div>

<div class="pen-title">
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="" method="POST">
      <div class="input-container">
        <input input type="text" id="login" name="login" required/>
        <label for="login">Login</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="senha" name="senha" required/>
        <label for="senha">Senha</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" value="login" name="opcao"><span>Logar</span></button>
      </div>
      <div class="footer"><a href="#">Esqueceu sua senha?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Registrar
      <div class="close"></div>
    </h1>

  
    <form action="" method="POST">
      <div class="input-container">
        <input type="text"  id="nome" name="nome" required />
        <label for="nome">Nome</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="text"  id="login" name="login" required/>
        <label for="login">Login</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password"  id="senha" name="senha" required/>
        <label for="senha">Senha</label>

        <input type="hidden" id="id" name="id"/>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button value="cadastrar_usuario" name="opcao" id="btnCadastrar" href="login.php" formaction="login.php" ><span>Cadastrar</span></button>
      </div>
    </form>
  </div>
</div>

<?php include("include_footer.php"); ?>
<?php include("controle_usuario.php"); ?>
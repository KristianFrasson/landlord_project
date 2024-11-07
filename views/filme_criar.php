<?php include("include_header_login.php"); //Insere as informações de HTML comum a todas as páginas?>
<?php include("crud_filme.php"); //Insere nesse arquivo as funções de CRUD com a Tabela do Banco de Dados ?>
<?php include("filme_dados.php"); //Insere nesse arquivo a verredura das tuplas da tabela que estar armazenados em uma variável ?>

<div class="pen-title">
</div>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Cadastro Filmes</h1>
    <form action="" method="POST">
      <div class="input-container">
        <input input type="text" id="nome" name="nome" required/>
        <label for="nome">Nome</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input input type="number" maxlength="4" id="ano_lancamento" name="ano_lancamento" required/>
        <label for="ano_lancamento">Ano de Lançamento</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input input type="number" id="duracao" name="duracao" required/>
        <label for="duracao">Duração</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input input type="text" id="genero" name="genero" required/>
        <label for="genero">Gênero</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input input type="text" id="faixa_etaria" name="faixa_etaria" required/>
        <label for="faixa_etaria">Faixa Etária</label>
        <input type="hidden" id="id" name="id"/>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button type="submit" value="cadastrar_filme" name="opcao" id="btnCadastrar">Cadastrar</button>
      </div>
    </form>

<?php include("include_footer.php"); //Insere as informações de HTML comum a todas as páginas?>
<?php include("controle_filme.php"); //Utiliza esse arquivo para fazer as verificações se tem variáveis POST ou GET?>	
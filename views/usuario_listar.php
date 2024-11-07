<?php include("include_header.php"); //Insere as informações de HTML comum a todas as páginas?>
<?php include("include_menu.php");?>
<?php include("crud_usuario.php"); //Insere nesse arquivo as funções de CRUD com a Tabela do Banco de Dados ?>
<?php include("usuario_dados.php"); //Insere nesse arquivo a verredura das tuplas da tabela que estar armazenados em uma variável ?>

<br>
<div class="container text-left">
  <div class="row align-items-start">
    <div class="col-10">
		<table class="table table-sm">
		  <thead class="table-dark">
			<tr> 
			  <th scope="col">#</th>
			  <th scope="col">Ações</th>
			  <th scope="col">Nome</th>
			  <th scope="col">Login</th>
			</tr>
		  </thead>
		  <tbody>
		  <?php echo $listaUsuarios; //variável que contem os dados da varredura das tuplas da tabela?>
		</tbody>
		</table>
    </div>
  </div>
</div>
	
<?php include("include_footer_listar.php"); //Insere as informações de HTML comum a todas as páginas?>
<?php include("controle_usuario.php"); //Utiliza esse arquivo para fazer as verificações se tem variáveis POST ou GET?>	

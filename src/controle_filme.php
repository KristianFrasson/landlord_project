<?php	

/* Função "$_POST[""]" verifica se o botão "Cadastrar" ou "Alterar" foi clicado através da variável do tipo array POST "opcao".
-------------------------------------------------- */  
	if(isset($_POST["opcao"])){
		$id_filme		= $_POST["id"];
		$nome 			= $_POST["nome"];
		$ano_lancamento = $_POST["ano_lancamento"];
		$duracao 		= $_POST["duracao"];
		$genero 		= $_POST["genero"];		
		$faixa_etaria 	= $_POST["faixa_etaria"];		
				
		$opcao 		= $_POST["opcao"];		
	
		if($opcao == "cadastrar_filme"){	
			cadastrarFilme($nome, $ano_lancamento, $duracao, $genero, $faixa_etaria);
		}
		else if($opcao == "alterar_filme"){
			alterarFilme($id_filme, $nome, $ano_lancamento, $duracao, $genero, $faixa_etaria);
		}
		
		direcionar("filme_listar.php");
	}

/* Função "$_GET[""]" verifica se variáveis específicas existem na URL da página que tem esse arquivo como include
-------------------------------------------------- */  	
	if(isset($_GET["id"])){
		$id_filme = $_GET["id"];
		$selectFilme = buscarFilme($id_filme);
		
		while($linhaFilme = mysqli_fetch_assoc($selectFilme)){
			$nome 			= $linhaFilme["nome"];
			$ano_lancamento = $linhaFilme["ano_lancamento"];
			$duracao 		= $linhaFilme["duracao"];
			$genero 		= $linhaFilme["genero"];			
			$faixa_etaria 	= $linhaFilme["faixa_etaria"];			
		}
		
		echo"
			<script>
				$(document).ready(function(){

					$('#btnCadastrar').css('display','none');
					$('#btnAlterar').css('display','inline');
					
					$('#id').val('$id_filme');
					$('#nome').val('$nome');
					$('#ano_lancamento').val('$ano_lancamento');
					$('#duracao').val('$duracao');
					$('#genero').val('$genero');
					$('#faixa_etaria').val('$faixa_etaria');
				});
			</script>
		";
	}

/* Função com uma estrutura de controle que verifica se a variável "opcao" é "deletar_usuario" onde ela mostra uma confirmação na tela, caso seja confirmado a variável "opcao" recebe o valor de "deletar_usuario_confirmar" e executa a função "deletarUsuario" que esta presente no arquivo "crud_usuario.php"
-------------------------------------------------- */ 
	if(isset($_GET["opcao"]) && $_GET["opcao"] == "deletar_filme"){
		$id_filme	= $_GET["id"];
		$nome 		= $_GET["nome"];

		echo"
			<script>
				var resposta = confirm('Deseja realmente EXCLUIR o Filme ".$nome."?');

				if(resposta == true){
					window.location.href='filme_listar.php?opcao=deletar_filme_confirmar&id=$id_filme';
				}
				else{
					window.location.href='filme_listar.php';
				}
			</script>
		";
		
	}else if(isset($_GET["opcao"]) && $_GET["opcao"] == "deletar_filme_confirmar"){
		$id_filme = $_GET["id"];

		deletarFilme($id_filme);
		direcionar("filme_listar.php");
	}
?>
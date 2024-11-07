<?php

@$opcao = $_POST["opcao"];
@$op = $_GET["opcao"];

if(isset($_POST["opcao"]) || isset($_GET["opcao"])){	

	if($op == "erro")
	{
		modal("#erro_login", "show");		
    }
	else if($op == "logout"){
		removeSessoes();
		direcionar("login.php");
	}
	else if($opcao == "login")
    {
		
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        $selectLogin = buscarLogin($login, $senha);
		
        if(mysqli_num_rows($selectLogin) != "" && mysqli_num_rows($selectLogin) != 0){
			while($linhaLogin = mysqli_fetch_assoc($selectLogin)){
                $_SESSION['id_usuario'] = $linhaLogin['id_usuario'];
                $_SESSION['nome'] 		= $linhaLogin['nome'];
                $_SESSION['login']		= $linhaLogin['login'];
                $_SESSION['status'] 	= $linhaLogin['status'];
            }
			direcionar("filme_listar.php");
        }
        else{
			removeSessoes();
			direcionar("login.php?opcao=erro");
        }
    }
}	

/* Função "$_POST[""]" verifica se o botão "Cadastrar" ou "Alterar" foi clicado através da variável do tipo array POST "opcao".
-------------------------------------------------- */  
	if(isset($_POST["opcao"])){
		$id_usuario	= $_POST["id"];
		$nome 		= $_POST["nome"];
		$login 		= $_POST["login"];
		$senha 		= $_POST["senha"];
		
		if(isset($_POST["status"])){ $status = 1; }
		else{ $status = 0; }	
		
		$opcao 		= $_POST["opcao"];		
	
		if($opcao == "cadastrar_usuario"){	
			cadastrarUsuario($nome, $login, $senha, $status);
		}
		else if($opcao == "alterar_usuario"){
			alterarUsuario($id_usuario, $nome, $login, $senha, $status);
		}
		
		direcionar("usuario_listar.php");
	}

/* Função "$_GET[""]" verifica se variáveis específicas existem na URL da página que tem esse arquivo como include
-------------------------------------------------- */  	
	if(isset($_GET["id"])){
		$id_usuario = $_GET["id"];
		$selectUsuario = buscarUsuario($id_usuario);
		
		while($linhaUsuario = mysqli_fetch_assoc($selectUsuario)){
			$nome	= $linhaUsuario['nome'];
			$login  = $linhaUsuario['login'];
			$senha  = $linhaUsuario['senha'];
			$status = $linhaUsuario['status'];			
		}
		
		echo"
			<script>
				$(document).ready(function(){
					$('#btnCadastrar').css('display','none');
					$('#btnAlterar').css('display','inline');
					
					$('#id').val('$id_usuario');
					$('#login').val('$login');
					$('#senha').val('$senha');
					$('#nome').val('$nome');
					
					if($status == 1){
						$('#status').attr('checked', true);
					}
				});
			</script>
		";
	}

/* Função com uma estrutura de controle que verifica se a variável "opcao" é "deletar_usuario" onde ela mostra uma confirmação na tela, caso seja confirmado a variável "opcao" recebe o valor de "deletar_usuario_confirmar" e executa a função "deletarUsuario" que esta presente no arquivo "crud_usuario.php"
-------------------------------------------------- */ 
	if(isset($_GET["opcao"]) && $_GET["opcao"] == "deletar_usuario"){
		$id_usuario = $_GET["id"];
		$nome 		= $_GET["nome"];

		echo"
			<script>
				var resposta = confirm('Deseja realmente EXCLUIR o Usuário ".$nome."?');

				if(resposta == true){
					window.location.href='usuario_listar.php?opcao=deletar_usuario_confirmar&id=$id_usuario';
				}
				else{
					window.location.href='usuario_listar.php';
				}
			</script>
		";
		
	}else if(isset($_GET["opcao"]) && $_GET["opcao"] == "deletar_usuario_confirmar"){
		$id_usuario = $_GET["id"];

		deletarUsuario($id_usuario);
		direcionar("usuario_listar.php");
	}


?>
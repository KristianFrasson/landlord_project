<?php session_start(); ?>
<?php 
	function modal($id, $efeito){
		echo "
		<script>
			$(document).ready(function() {
				$('$id').modal('$efeito');
			});
		</script>";
	}

	function removeSessoes(){
		unset($_SESSION['id_usuario']);
		unset($_SESSION['nome']);
		unset($_SESSION['login']);
		session_destroy();
	}
	
	// Função que ao ser chamada recebe uma URL e por meio de comando JavaScript redireciona para essa URL
	function direcionar($url){
		echo"
		<script>
			window.location.href='".$url."';
		</script>
		";
	}

	// Função que ao ser chamada recebe uma mensagem e por meio de comando JavaScript emite um "alert()" na tela com essa mensagem recebida
	function alerta($msg){
		echo"
			<script>
				alert('".$msg."');
			</script>
		";
	}
?>
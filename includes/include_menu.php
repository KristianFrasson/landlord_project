<?php
	//Se não existir a Sessão, então redireciona para o login.
	if(!isset($_SESSION['id_usuario'])){
		direcionar("login.php");
	}	
?>

<nav class="navbar navbar-expand-lg navbar-dark navbar-sm" style="background-color: rgb(8, 57, 102);">
  <div class="container px-4">
    <a class="navbar-brand" href="/">
      <span style="color:#ffffff; font-size:26px; font-weight:bold; letter-spacing: 1px;">Olá <?php echo @$_SESSION['nome']; ?>&nbsp;</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
        class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="usuario_listar.php">Usuários</a></li>
        <li class="nav-item"><a class="nav-link" href="filme_listar.php">Filmes</a></li>
        <li class="nav-item"><a class="nav-link" href="usuario_registrar.php">Cadastro Usuários</a></li>
        <li class="nav-item"><a class="nav-link" href="filme_criar.php">Cadastro Filmes</a></li>
        <li class="nav-item"><a class="nav-link" aria-current="page" href="login.php?opcao=logout">Sair <?php echo $icoSair; ?></a></li>
      </ul>

				</a>
			</div>
    </div>
  </div>
</nav>

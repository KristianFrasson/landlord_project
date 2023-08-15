<?php

$selectUsuarios = buscarUsuarios(); //chama a função "buscarUsuarios()" que esta no arquivo "model/crud_usuario.php" e recebe a informação do
$listaUsuarios = "";
$numLinha = 0;

while ($linhasUsuarios = mysqli_fetch_assoc($selectUsuarios)) {
	$id_usuario = $linhasUsuarios['id_usuario'];
	$login 		= $linhasUsuarios['login'];
	$senha 		= $linhasUsuarios['senha'];
	$nome		= $linhasUsuarios['nome'];
	$status 	= $linhasUsuarios['status'];
	$numLinha++;

	//A cada volta do "while" é concatenado o resultado e armazenado na variável "$listaUsuarios"
	$listaUsuarios .= "
<tr>
	<th scope='row'>$numLinha</th>
	<td>
		<a class='btn btn-primary' href='usuario_registrar.php?opcao=alterar_usuario&id=$id_usuario'>
			 $icoEdit
		<a>
		<a class='btn btn-danger' href='usuario_listar.php?opcao=deletar_usuario&id=$id_usuario&nome=$nome'>
			 $icoDelete
		<a>
	</td>
	 <td>$nome</td>
	 <td>$login</td>
</tr>
";
}
?>
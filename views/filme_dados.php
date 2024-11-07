<?php
$selectFilmes = buscarFilmes(); //chama a função "buscarCarros()" que esta no arquivo "model/crud_carro.php" e recebe a informação do
$listaFilmes = "";
$numLinha = 0;

while ($linhasFilmes = mysqli_fetch_assoc($selectFilmes)) {
	$id_filme 		= $linhasFilmes['id_filme'];
	$nome 			= $linhasFilmes['nome'];
	$ano_lancamento = $linhasFilmes['ano_lancamento'];
	$duracao 		= $linhasFilmes['duracao'];
	$genero 		= $linhasFilmes['genero'];
	$faixa_etaria 	= $linhasFilmes['faixa_etaria'];
	$numLinha++;

	//A cada volta do "while" é concatenado o resultado e armazenado na variável "$listaCarros"
	$listaFilmes .= "
<tr>
	<th scope='row'>$numLinha</th>
	<td>
		<a class='btn btn-primary' href='filme_edit.php?opcao=alterar_filme&id=$id_filme'>
			 $icoEdit
		<a>
		<a class='btn btn-danger' href='filme_listar.php?opcao=deletar_filme&id=$id_filme&nome=$nome'>
			 $icoDelete
		<a>
	</td>
	 <td>$nome</td>
	 <td>$ano_lancamento</td>
	 <td>$duracao</td>
	 <td>$genero</td>
	 <td>$faixa_etaria</td>
</tr>
";
}
?>
<?php
/* Função recebe um número de ID e realiza um SELECT no Banco de Dados retornando as informações do usuário correspondente ao ID
-------------------------------------------------- */    
    function buscarFilme($id)
    {
		conectar();
		    $selectFilme = query("
                SELECT *
                FROM filme
                WHERE
                    id_filme = '$id'
            ");
		desconectar();

        return $selectFilme;
	}

/* Função faz uma busca no Banco de Dados e trás todos os usuários da tabela "carro"
-------------------------------------------------- */       
    function buscarFilmes()
    {
		conectar();
		    $selectFilmes = query("
                SELECT *
                FROM filme
                ORDER BY nome
            ");
        desconectar();

        return $selectFilmes;
	}

/* Função recebe variáveis correspondentes a cada Domínio da Tupla da Tabela e realiza o comando SQL INSERT na tabela "carro"
-------------------------------------------------- */
    function cadastrarFilme($nome, $ano_lancamento, $duracao, $genero, $faixa_etaria)
    {
        $conexao ="";
        
        conectar();
            query("
                INSERT INTO filme(nome, ano_lancamento, duracao, genero, faixa_etaria)
                VALUES ('$nome', '$ano_lancamento', '$duracao', '$genero', '$faixa_etaria')
            ");
        desconectar();
	}

/* Função recebe variáveis correspondentes a cada Domínio da Tupla da Tabela e realiza o comando SQL UPDATE na tabela "login" e "carro"
-------------------------------------------------- */   

    function alterarFilme($id_filme, $nome, $ano_lancamento, $duracao, $genero, $faixa_etaria)
    {
		conectar();
            query("
                UPDATE filme
                SET
                    nome            = '$nome',
                    ano_lancamento	= '$ano_lancamento',
                    duracao         = '$duracao',
                    genero          = '$genero',
                    faixa_etaria    = '$faixa_etaria'
                WHERE id_filme = $id_filme
            ");            
        desconectar();
	}

/* Função recebe um número de ID e realiza um DELETE na Tabela "carro"
-------------------------------------------------- */
    function deletarFilme($id)
    {
        conectar();
		    query("
                DELETE FROM filme
                WHERE id_filme = $id
            ");
        desconectar();
    }

?>
<?php

function buscarLogin($login, $senha)
{
	conectar();
		$selectLogin = query("
			SELECT *
			FROM usuario
			WHERE
				login = '$login' AND
				senha = '$senha'
		");
	desconectar();
	return $selectLogin;
}

/* Função recebe um número de ID e realiza um SELECT no Banco de Dados retornando as informações do usuário correspondente ao ID
-------------------------------------------------- */    
    function buscarUsuario($id)
    {
		conectar();
		    $selectUsuario = query("
                SELECT *
                FROM usuario
                WHERE
                    id_usuario = '$id'
            ");
		desconectar();

        return $selectUsuario;
	}

/* Função faz uma busca no Banco de Dados e trás todos os usuários da tabela "usuario"
-------------------------------------------------- */       
    function buscarUsuarios()
    {
		conectar();
		    $selectUsuarios = query("
                SELECT *
                FROM usuario
                ORDER BY nome
            ");
        desconectar();

        return $selectUsuarios;
	}

/* Função recebe variáveis correspondentes a cada Domínio da Tupla da Tabela e realiza o comando SQL INSERT na tabela "usuario"
-------------------------------------------------- */
    function cadastrarUsuario($nome, $login, $senha, $status)
    {
        $conexao ="";
        
        conectar();
            query("
                INSERT INTO usuario(nome, login, senha, status)
                VALUES ('$nome', '$login', '$senha', '$status')
            ");
        desconectar();
	}

/* Função recebe variáveis correspondentes a cada Domínio da Tupla da Tabela e realiza o comando SQL UPDATE na tabela "login" e "usuario"
-------------------------------------------------- */   

    function alterarUsuario($id_usuario, $nome, $login, $senha, $status)
    {
		conectar();
            query("
                UPDATE usuario
                SET
                    nome        = '$nome',
                    login   	= '$login',
                    senha       = '$senha',
                    status      = '$status'
                WHERE id_usuario = $id_usuario
            ");            
        desconectar();
	}

/* Função recebe um número de ID e realiza um DELETE na Tabela "usuario"
-------------------------------------------------- */
    function deletarUsuario($id)
    {
        conectar();
		    query("
                DELETE FROM usuario
                WHERE id_usuario = $id
            ");
        desconectar();
    }

?>
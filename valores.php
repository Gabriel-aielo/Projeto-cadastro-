<?php 

		include_once('config.php'); //chama o documento que requsita acesso ao servidor mySQL

		//cada variavel "$exeplo" armazena um valor recuperado de um input html 
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['sexoGenero'];
        $nascimento = $_POST['nascimento'];
        $logradouro = $_POST['logradouro'];
        $cidade = $_POST['cidadeEstado'];
        $cep = $_POST['cep'];


		// Variavel result = Envia os dados input (armazenados nas variaveis PHP)  

		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			exit();

		} else {
			$result = mysqli_query($conn, "INSERT INTO db_cadastro(cep,cidade,email,genero,logradouro,nascimento,nome,telefone) VALUES('$cep','$cidade','$email','$genero','$logradouro','$nascimento','$nome','$telefone')");
			header('Location: index.php?dadosEnviados=true');
		}

?>
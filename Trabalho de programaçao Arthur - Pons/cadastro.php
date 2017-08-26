
<?php
 require_once('conexao.php');
	  $conn = new Conexao();
	  $conn->conectar();
	  $nome = $_POST['nome'];
	  $email = $_POST['email'];
	  $senha = $_POST['senha'];
	  $consulta =$conn->connection->prepare(" insert into usuario(nome, email, senha) values (?, ?, ?); ");
 	  $consulta->execute(array($nome, $email, $senha));

 	  
  ?>
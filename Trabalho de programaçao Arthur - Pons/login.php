<?php 
 require_once('conexao.php');

$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
if (empty($email) || empty($password)){
    echo "Informe email e senha";
    exit;
}

$passwordHash = criptografar($password);

  ?>
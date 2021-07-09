<?php
$servername = "banco";
$username = "root";
$password = "12345";
$database = "banco";
// Create connection 
$conn = new mysqli ($servername, $username, $password, $database);

// Check connetcion
if ( $conn -> connect_error) {

	die ("Conexão Falhou:". $conn->connect_error);
}

$nome 			 = $_POST['nome'];
$email 			 = $_POST['email'];
$cidade  	 	 = $_POST['cidade'];
$estado  		 = $_POST['estado'];
$comentarios  	 = $_POST['comentarios'];

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome','$email', '$cidade', '$estado', '$comentarios')";

if ($conn->query($sql)) {
	echo  "Usuário incluído com sucesso!";
} else {
	echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

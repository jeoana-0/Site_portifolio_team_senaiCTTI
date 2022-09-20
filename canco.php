<?php

$conn = mysqli_connect('localhost','root','','time');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$logar = mysqli_query($conn, "SELECT * FROM info WHERE 'nome_usuario' = '$usuario' and 'senha_usuario' = '$senha' ");

if ($logar == true) {
    $row = mysqli_fetch_array($logar);
        echo $row["nome_usuario"];
}
else {
   null;
}

?>
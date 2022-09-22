<?php

try {
    $conn = mysqli_connect('localhost','root','','info');    
}catch(\Exception $error){
    var_dump($error);
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$logar = mysqli_query($conn, "SELECT * FROM usuarios where usuario = '$usuario' and senha = '$senha'; ");

if ($logar->num_rows !== 0) {
    $row = mysqli_fetch_array($logar);
    
    session_start();
    $_SESSION["email"] = $row["email"];
    $_SESSION["nome"] = $row["nome_usuario"];
    $_SESSION["logado"] = true;

    header('Location: http://localhost/Site_portifolio_team_senaiCTTI/welcome.php');
    
}

else {
    echo "Nenhum resultado encontrado!";
   null;
}

?>
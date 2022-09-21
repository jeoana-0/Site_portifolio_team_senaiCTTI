<?php

try {
    $conn = mysqli_connect('192.168.0.112','sail','password','portal-boletos');    
}catch(\Exception $error){
    var_dump($error);
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$logar = mysqli_query($conn, "SELECT * FROM users where name = '$usuario'; ");

if ($logar->num_rows !== 0) {
    $row = mysqli_fetch_array($logar);

    echo "Bem Vindo ".$row["name"];
    echo "<br>";
    echo "Seus dados";    
    echo "<hr>";
    echo "Email: ".$row['email'];
    echo "<br>";
    echo "Membro desde ".$row["created_at"];
} else {
    echo "Nenhum resultado encontrado!";
   null;
}

?>
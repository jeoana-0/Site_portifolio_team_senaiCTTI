<?php

session_start();
if(!$_SESSION['logado']){
    header('Location: http://localhost/Site_portifolio_team_senaiCTTI/index.html');
}



function logout(){
    session_destroy();
    header('Location: http://localhost/Site_portifolio_team_senaiCTTI/');
};


if (isset($_GET['name'])) {
    logout();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?= $_SESSION["nome"] ?></h1>
    <a href=" http://localhost/Site_portifolio_team_senaiCTTI/welcome.php?name=true)">logout</a>
    <a href=" http://localhost/Site_portifolio_team_senaiCTTI/">voltar sem</a>
</body>
</html>



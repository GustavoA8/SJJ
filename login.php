<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BROKEN CODE</title>
</head>
<body>
        <h1>Logado parabens</h1>
</body>
</html>

<?php

include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nick = $_POST["nick"];
    $senha = $_POST["senha"];
    $logar = $_POST["logar"];
    $situacao = array();

    if (empty($nick)) {
        echo "Insira seu nome";
    } elseif (empty($senha)) {
        echo "Insira sua senha";
    } else {
            $verifica = mysqli_query($conn,"SELECT user_nick, user_senha FROM tb_usuarios WHERE user_nick = '$nick' AND user_senha = '$senha'") or die("erro ao selecionar");
            if (mysqli_num_rows($verifica) <= 0) {
                $situacao["login"] = false;
                $situacao["erro"] = '<script>let erro = document.querySelector("#erro")
                erro.innerHTML="Login ou senha incorreto" </script>';
                echo($situacao);
                // header("Location:index.php");
                
                
            } else {
                $situacao["login"] = true;
                $situacao["sucesso"] = "Funcionando"
                echo json_encode ($situacao);
            }
    }
}
mysqli_close($conn);
?>

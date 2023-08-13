<?php

include("connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nick = $_POST["nick"];
    $senha = $_POST["senha"];
    $logar = $_POST["logar"];

    if(empty($nick)){
        echo"Insira seu nome";
    }
    elseif(empty($senha)){
        echo"Insira sua senha";
    }
    else{
        if(!$logar){
            $verifica = mysqli_query("SELECT user_nick,user_senha FROM tb_usuarios WHERE login = '$nick' AND senha = '$senha'") or die("erro ao selecionar");
            if (mysql_num_rows($verifica)<=0){
                echo'<script> alert("Login ou senha incorreta");</script>';
                die();
            }else{
                setcookie("login",$login);
                header("Location:index.php");
                echo"Funcionando";
            }
        }
    }
}




mysqli_close($conn);

?>
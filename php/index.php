<?php
include("connect.php");
$nome = $_POST["cnome"];
$nick = $_POST["cnick"];
$senha = $_POST["csenha"];
$sql = "INSERT INTO tb_usuarios (user_nome, user_nick, user_senha)VALUES('$nome','$nick','$senha')";
    try{
       mysqli_query($conn, $sql);
       echo "User is now registered";
    }
    catch(mysqli_sql_exception){
        echo"Could not register user";
    }
mysqli_close($conn);
?>
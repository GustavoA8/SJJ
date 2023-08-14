<?php
include("connect.php");
?>
 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODE BROKEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
  
  <style>
@media only screen and (max-width: 900px){
    .label1 {
        font-size: 12pt !important;
    }
}
/* @media only screen and (max-width: 630px){
    .pastas {
       display: block !important;
       position: absolute !important;
    }
} */
body{
    
    background-image: url("imagens/fungog.gif");
    padding:0;
    margin:0;

}
.label1{
    font-family: 'Press Start 2P', cursive;
    color: aliceblue;
    /* background-color: aqua; */
    position: relative;

 
    

}
#test{
    position: relative;
    top: -300px;
    right: 50px;


}

.modal{
    display: none;
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0,0.4);
}

.modal .content{
    background-color: greenyellow;
    font-family: 'Press Start 2P', cursive;
    margin: 15% auto;
    padding: 20px;
    border-radius: 5px;
    width: 70%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.modal #sobre{
    background-color: greenyellow;
    font-family: 'Press Start 2P', cursive;
    margin: 5% auto;
    padding: 20px;
    border-radius: 5px;
    width: 80%;
    height: 70%;
    display: flex;
    flex-direction: column;
    align-items: center;

}
.modal #rank{
    background-color: greenyellow;
    font-family: 'Press Start 2P', cursive;
    margin: 15% auto;
    padding: 20px;
    border-radius: 5px;
    width: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
}

section{
    margin-top: 1000px;
}


#div1{
    text-align: center;
}
#div2{
    text-align: center;
}



  </style>
  <audio id="musica" controls loop>
     <source src="background-song.mpeg" type="audio/mpeg">
  </audio>
</head>
<body >
    
<div class="modal " id="modal">
    <div class="content">
        <!-- Insire seu conteúdo -->
        <form action="" method="post">
            <label for="nome">Nickname:</label><br>
            <input type="text" id="nick" name="nick" value=""><br>
            <label for="senha">Senha</label><br>
            <input type="text" id="senha" name="senha" value=""><br><br>
            <div id='erro'></div>
            <input type="button" onclick="login()" value="logar" name="logar">
            <div class="float-sm-end">
            <input type="button" id="btnCriar" value="Criar">
            </div>
        </form>
    </div>
</div>

<div class="modal" id="modal2">
    <div class="content">
        <!-- Insire seu conteúdo -->
        <form action="index.php" method="post">
            <label for="cnome">Nome:</label><br>
            <input type="text" name="cnome" id="cnome"><br>
            <label for="cnick">Nickname:</label><br>
            <input type="text" name="cnick" id="cnick"><br>
            <label for="csenha">Senha:</label><br>
            <input type="text" name="csenha" id="csenha"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</div>

<div class="modal" id="modals" >
    <div id="sobre" class="content">
        <!-- Insire seu conteúdo -->
       
        
    </div>
</div>
<div class="modal" id="modalr" >
    <div id="rank" class="content">
        <!-- Insire seu conteúdo -->
       
        
    </div>
</div>
<section class="row justify-content-md-center">
    <div id="div2" class="col-12 mt-5">
        
<img class="col-10 col-sm-5 mx-auto mt-5 " id="logo" src="imagens/logo.png" alt="">
 </div>
 <div id="div1" class="row justify-content-md-center mt-5">
   
    
    <section class="col-12 col-sm-4 mt-5">
        <div class="mt-5"><img id="pasta1"  onmouseover="mudar1()" onmouseout="normal1()" class="pastas col-3 me-2 mt-5" src="imagens/pasta.png" alt=""></div>
        <label class="label1 fs-3 mt-1" for="">Rank</label>
    </section>
    <section class="col-12 col-sm-4 mt-5">
        <div class="mt-5"><img id="pasta2" onmouseover="mudar2()" onmouseout="normal2()" class="pastas col-3 me-2 mt-5" src="imagens/pasta.png" alt=""></div>
        <label class="label1 fs-3 mt-1" for="">Novo Jogo</label>
    </section>

    <section class="col-12 col-sm-4 mt-5">
        <div class="mt-5"><img id="pasta3" onmouseover="mudar3()" onmouseout="normal3()" class="pastas col-3 me-2 mt-5" src="imagens/pasta.png" alt=""></div>
        <label class="label1 fs-3 mt-1" for="">Sobre</label>
    </section>
    

 </div>
</section>

<footer></footer>

    <script src="js/index.js"></script>
</body>
</html>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = filter_input(INPUT_POST, "cnome", FILTER_SANITIZE_SPECIAL_CHARS);
        $nick = filter_input(INPUT_POST, "cnick", FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_input(INPUT_POST, "csenha", FILTER_SANITIZE_SPECIAL_CHARS);

        if(empty($nome)){
            echo"Insira seu nome";
        }
        elseif(empty($nick)){
            echo"Insira seu nick";
        }
        elseif(empty($senha)){
            echo"Insira sua senha";
        }
        else{
            $sql = "INSERT INTO tb_usuarios(user_nome, user_nick, user_senha) VALUE ('$nome','$nick','$senha')";
            try{
            mysqli_query($conn, $sql);
            echo"Voce esta registado";
            }
            catch(mysqli_sql_exception){
                mysqli_close($conn);
            }
        }
    }
    



    mysqli_close($conn);
?>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $banco = "carteirinhaf";

    include('conectar.php');
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if($login==="escola@gmail.com" && $senha==="escola123"){
        echo "<script>
            alert ('Login realizado com sucesso!');
            window.location.href='opcaofuncionario.html';
        </script>";
    }else{
        echo "<script>
            alert ('Login ou Senha Incorretos!');
            window.location.href='loginf.html';
        </script>";"". $conexao->connect_error;
    }
?>
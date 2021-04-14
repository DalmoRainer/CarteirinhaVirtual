<?php
  $servidor = "localhost";
  $usuario = "root";
  $password = "";
  $banco = "carteirinhaf";

  // Create connection
  $conexao = new mysqli($servidor, $usuario, $password, $banco);
  // Check connection
  if ($conexao->connect_error) {
  die("Connection failed: " . $conexao->connect_error);
  }

  $nome = $_POST['nome'];
  $campo = $_POST['campo'];
  if($campo=="usuario"){
    $sql = "DELETE FROM cadastraralunos WHERE usuario LIKE '%$nome%';";
    echo("<script>
    alert ('Aluno deletado com sucesso!');
    window.location.href='deletara.html';
    </script>");
  }
  if($campo=="matricula"){
    $sql = "DELETE FROM cadastraralunos WHERE matricula LIKE '%$nome%';";
    echo("<script>
    alert ('Aluno deletado com sucesso!');
    window.location.href='deletara.html';
    </script>");
  }else{
    echo("<script>
    alert ('Aluno não deletado!');
    window.location.href='deletara.html';
    </script>");
  }
  $consulta= mysqli_query($conexao, $sql);
?>
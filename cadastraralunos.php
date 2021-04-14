<?php

include('conectar.php');

if(isset($_FILES['imagem'])){
  print_r($_FILES['imagem']);
  $nomearquivo = $_FILES['imagem']['name'];
  $localarquivo =$_FILES['imagem']['tmp_name'];
  $extensao= strtolower(substr($_FILES['imagem']['name'], -4)); // trocar o nome do arquivo e diminuir o seu nome
  $renomeararquivo= md5(uniqid(time())) . ".".$extensao; //trocar o nome do arquivo para a hora ataual e encriptar ela
  $caminhosalvar ='arquivos/'.$renomeararquivo; // local onde vai salvar o arquivo
  move_uploaded_file($_FILES['imagem']['tmp_name'],$caminhosalvar);//testar upload
  //Variaveis que irao armazenar os dados digitados no HTML
  $usuario = $_POST['nome'];
  $matricula = $_POST['matricula'];
  $idade = $_POST['idade'];
  $sexo = $_POST['sexo'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $sala = $_POST['sala'];
  $curso = $_POST['curso'];
  $data = $_POST['dataano'];

  $sql = "INSERT INTO cadastraralunos (usuario, matricula, idade, sexo, endereco, telefone, sala, curso, dataano, data, foto)
  VALUES ('$usuario', '$matricula', '$idade', '$sexo', '$endereco', '$telefone', '$sala', '$curso', '$data', NOW(), '$renomeararquivo')";

  if ($conn->query($sql) === TRUE) {
    echo ("<script>
      alert('Cadastro realizado com sucesso');
      window.location.href='cadastroa.html';
      </script>"
    );
  } else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>
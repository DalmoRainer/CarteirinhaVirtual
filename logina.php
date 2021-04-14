<html>
    <head>
        <?php
            session_start();
            if(empty($_POST['usuario']) || empty($_POST['matricula'])){
                echo "<script>
                    alert ('Login ou Senha Incorretos!');
                    window.location.href='logina.html';
                    </script>";
                exit();
            }
        ?>
        <title>Carteirinha Virtual</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="icon" type="image/png" href="images/icons/logo.png" />
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <!--===============================================================================================-->
	</head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">Início</a>
            </div>
        </nav>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <span class="login100-form-title p-b-26 ">
						Carteirinha Virtual
					</span>
                    <table class="table" style="width:100%">
                        

                        <?php

                        include('conectar.php');

                        $usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
                        $senha = mysqli_real_escape_string($conn, $_POST['matricula']);
                        

                        $pasta ="arquivos/"; //buscar imagem na pasta 
                        $local= dir($pasta); // diretorio de busca
                                
                        $query = "select * from cadastraralunos where usuario ='{$usuario}' and matricula = '{$senha}'";

                        $result = mysqli_query($conn, $query);

                        $row = mysqli_num_rows($result);

                        if($row == 1){
                            $_SESSION['usuario'] = $usuario;
                            echo "<script>
                                    alert ('Login realizado com sucesso!');
                                </script>";
                                $comando = "SELECT * FROM cadastraralunos WHERE usuario LIKE '%$usuario%'";   
                                
                                //execultar consulta
                                $consulta= mysqli_query($conn, $comando);
                                
                                
                                $aux=0;
                                
                                while(mysqli_num_rows($consulta)>$aux){
                                
                                //pegar linha da consulta
                                $rs = mysqli_fetch_array($consulta);
                                //mudei do if acima pois la traz tudo e aqui vem direto da row "lina do db" conforme a consulta do where
                                echo "</tr><thead><img src='".$pasta.$rs['foto']."'width='300''></img></thead>";
                                
                                echo("
                                <tr>
                                <td>
                                $rs[usuario]</td>
                                </tr>
                                <tr>
                                <td>Matrícula:
                                $rs[matricula]</td>
                                </tr>  
                                <tr>
                                <td>Idade:
                                $rs[idade]</td>
                                </tr> 
                                <tr>
                                <td>Sala:
                                $rs[sala]</td>
                                </tr>
                                <tr>
                                <td>Curso:
                                $rs[curso]</td>
                                </tr>
                                <tr>
                                <td>Ano Letivo:
                                $rs[dataano]</td>
                                </tr>
                            </tr>");
                        $aux++;
                        }
                            exit();
                        }else{
                            echo "<script>
                                    alert ('Login ou Senha Incorretos!');
                                    window.location.href='logina.html';
                                </script>";
                            exit();
                        } 
                        ?>
                        
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
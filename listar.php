<?php

include('conectar.php');

$comando = "SELECT * FROM cadastraralunos WHERE usuario LIKE '%$usuario%'";


//execultar consulta
$consulta= mysqli_query($conn, $comando);
$aux=0;
while(mysqli_num_rows($consulta)>$aux){

//pegar linha da consulta
$rs = mysqli_fetch_array($consulta);
echo("<tr>
     
        <td>$rs[usuario]
        <td>$rs[matricula]
        <td>$rs[idade]
        <td>$rs[sexo]
        <td>$rs[endereco]
        <td>$rs[telefone]
        <td>$rs[sala]
        <td>$rs[curso]
        <td>$rs[dataano]
        <td>$rs[foto]
        
    </tr>");
$aux++;

}



?>
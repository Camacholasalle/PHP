<?php

$host="localhost";
$user="root";
$pass="";
$banco="teste";
$conexao=mysqli_connect($host,$user,$pass) or die (mysql_error());
mysqli_select_db($conexao,$banco)or die(mysql_error());

$cpf=$_POST['CPF'];
$nome=$_POST['nome'];
$email=$_POST['email'];
$tel=$_POST['tel'];


$sql=mysqli_query($conexao,"insert into cadastro(CPF,nome,email,tel) values('$cpf','$nome','$email','$tel')");
echo"Cadastrado com sucesso";


?>
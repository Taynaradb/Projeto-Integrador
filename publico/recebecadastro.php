<?php


$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$dataNasci = $_POST['data'];
$cartaoSUS = $_POST['cartaoSUS'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$celularRecado = $_POST['celularRecado'];
$parentesco = $_POST['parente'];
$email = $_POST['email'];
$confirmarEmail = $_POST['confirmar'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$num = $_POST['numero'];
$compl = $_POST['compl'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['uf'];
$termo = $_POST['aceito'];

include "../includes/config.php";
$sqlInserir = "INSERT INTO inscricao(nome, rg, cpf, dataNasci, cartaoSUS, telefone, celular, celularRecado, parentesco, 
email, confirmarEmail, cep, rua, num, compl, bairro, cidade, estado, termo) values('{$nome}' , '{$rg}' , '{$cpf}' , '{$dataNasci}'
,'{$cartaoSUS}', '{$telefone}', '{$celular}', '{$celularRecado}' , '{$parentesco}', '{$email}', '{$confirmarEmail}',
 '{$cep}', '{$rua}', '{$num}', '{$compl}', '{$bairro}', '{$cidade}', '{$estado}', '{$termo}'
);";

$resultado = mysqli_query($conn, $sqlInserir);

if($resultado){
    header("location: agendamento.php");
}else{
    echo "Algum erro aconteceu";
}

?>
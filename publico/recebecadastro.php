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

/*  uploads rg */ 
$dir = "../arquivos";
$rglocal = $_FILES['rgArquivo'];
$rgArquivo = $dir . $rglocal['name'];

move_uploaded_file($rglocal['tmp_name'], "$dir/" . $rglocal['name']);

/*  uploads cpf */ 
$dir = "../arquivos";
$cpflocal = $_FILES['cpfArquivo'];
$cpfArquivo = $dir . $cpflocal['name'];

move_uploaded_file($cpflocal['tmp_name'], "$dir/" . $cpflocal['name']);

/*  uploads cartão do SUS */ 
$dir = "../arquivos";
$suslocal = $_FILES['susArquivo'];
$susArquivo = $dir . $suslocal['name'];

move_uploaded_file($suslocal['tmp_name'], "$dir/" . $suslocal['name']);

/*  uploads comprovante de endereço */ 
$dir = "../arquivos";
$enderecolocal = $_FILES['enderecoArquivo'];
$enderecoArquivo = $dir . $enderecolocal['name'];

move_uploaded_file($enderecolocal['tmp_name'], "$dir/" . $enderecolocal['name']);

include "../includes/config.php";
$sqlInserir = "INSERT INTO inscricao(nome, rg, cpf, dataNasci, cartaoSUS, telefone, celular, celularRecado, parentesco, 
email, confirmarEmail, cep, rua, num, compl, bairro, cidade, estado, rgArquivo, cpfArquivo, susArquivo, enderecoArquivo, termo) values('{$nome}' , '{$rg}' , '{$cpf}' , '{$dataNasci}'
,'{$cartaoSUS}', '{$telefone}', '{$celular}', '{$celularRecado}' , '{$parentesco}', '{$email}', '{$confirmarEmail}',
 '{$cep}', '{$rua}', '{$num}', '{$compl}', '{$bairro}', '{$cidade}', '{$estado}', '{$rgArquivo}','{$cpfArquivo}','{$susArquivo}','{$enderecoArquivo}','{$termo}'
);";

$resultado = mysqli_query($conn, $sqlInserir);

if($resultado){
    echo "Deu certo, ufa";
}else{
    echo "Algum erro aconteceu";
}

?>
<?php include_once"config.php";?>

<html>
    <body>
        <?php


        $verify = "SELECT * FROM tbcadastro";
        $show = mysqli_query($conn, $verify);      
        $col = mysqli_num_rows($show);


        if($col <= 3){
        $nome = $_POST["nome"];
        $rg = $_POST["rg"];
        $cpf = $_POST["cpf"];
        $dataNasci = $_POST["data"];
        $cartaoSUS = $_POST["cartaoSUS"];
        $telefone = $_POST["telefone"];
        $celular = $_POST["celular"];
        $celularRecado = $_POST["celularRecado"];
        $email = $_POST["email"];
        $confirmarEmail = $_POST["confirmarEmail"];
        $cep = $_POST["cep"];
        $rua = $_POST["rua"];
        $casaNum = $_POST["casaNum"];
        $compl = $_POST["compl"];
        $bairro = $_POST["bairro"];
        $cidade = $_POST["cidade"];
        $estado = $_POST["uf"];
        $conn = mysqli_connect($server,$dbuser,$dbpassword,$dbname);

        mysqli_select_db($conn,'$dbname');
        $sql = "INSERT INTO tbcadastro (nome, rg, cpf, dataNasci, cartaoSUS, telefone, celular,
        celularRecado, email, confirmarEmail, cep, rua, num, compl, bairro, cidade, estado) VALUES ('$nome', '$rg','$cpf',
        '$dataNasci','$cartaoSUS','$telefone','$celular','$celularRecado','$email','$confirmarEmail','$cep','$rua','$casaNum',
        '$compl','$bairro','$cidade','$estado')";



        }else{
            <?php include_once"encerrado.php";?>
            exit;
        }
        ?>


        <?php
        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Salvei seus dados!'); window.location = 'index.php'; </script>";
        }else{
         echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        ?>
        
    


    </body>
</html>
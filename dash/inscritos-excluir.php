<?php include "../includes/config.php";

$id_inscrito = $_GET['id'];

$sqlExcluir = "DELETE FROM inscricao WHERE id = {$id_inscrito}";

$resultado = mysqli_query($conn, $sqlExcluir);

if($resultado){
    header ("location: inscritos-listar.php");
}else{
    echo "Algum erro aconteceu";
}


?>










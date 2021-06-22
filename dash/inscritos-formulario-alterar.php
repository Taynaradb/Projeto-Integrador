<?php include "../includes/dash-nav.php";  ?>

<?php
include "../includes/config.php"; 

$id_inscrito = $_POST['id'];

$sqlBuscaInscritos = "SELECT * FROM inscricao WHERE id = {$id_inscrito}";

  $nome = $telefone = $celular = $celularRecado = 
  $email = $cep = $rua = $num = $compl = $bairro = 
  $cidade = $estado = $id_inscrito = "";

    $listaDeInscritos = mysqli_query($conn, $sqlBuscaInscritos);
    while($inscrito = mysqli_fetch_assoc($listaDeInscritos)){
        $nome = $inscrito['nome'];
        $telefone = $inscrito['telefone'];
        $celular = $inscrito['celular'];
        $celularRecado = $inscrito['celularRecado'];
        $email = $inscrito['email'];
        $cep = $inscrito['cep'];
        $rua = $inscrito['rua'];
        $num = $inscrito['num'];
        $compl = $inscrito['compl'];
        $bairro = $inscrito['bairro'];
        $cidade = $inscrito['cidade'];
}

?>

<!-- TABLE -->
<div class="container">
    <div class="container">
        <div class="container">
            <form action="inscritos-alterar.php" name="cadastr-inscritos" method="post">
                <input type="hidden" name="id_paciente" value="<?php echo $id_paciente ; ?>">

                <div class="row">
                    <div class="form-row">
                        <label for="nome">Nome completo:</label>
                        <input name="nome" type="text"  value="<?php echo $nome ; ?>" class="form-control" id="nome" placeholder="Nome completo">
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <label for="telefone">Telefone fixo</label>
                            <input type="text" name="telefone" value="<?php echo $telefone ; ?>" class="form-control" id="telefone"
                                placeholder="(19) 1234-5678">
                        </div>
                        <div class="col-6">
                            <label for="celular">Celular</label>
                            <input name="celular" type="text" value="<?php echo $celular ; ?>" class="form-control" id="celular"
                                placeholder="(19) 99999-9999">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="celularRecado">Celular para recado</label>
                            <input type="text" name="celularRecado" value="<?php echo $celularRecado ; ?>" class="form-control" id="celularRecado"
                                placeholder="(19) 99999-9999">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="parente">Grau de parentesco</label>
                            <select class="form-select" name="parente">
                                <option name="parente" value="" disabled>Escolha um grau de parentesco</option>
                                <option name="parente" value="filho">Filho(a)</option>
                                <option name="parente" value="irmao">Irmão(a)</option>
                                <option name="parente" value="sobrinho">Sobrinho(a)</option>
                                <option name="parente" value="casado">Marido/Esposa</option>
                                <option name="parente" value="amigo">Amigo(a)</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input name="email" type="email" class="form-control" id="email" value="<?php echo $email ; ?>"
                            placeholder="maria@rosadobem.com">
                    </div>

                    <div>
                        <div class="row">
                            <div class="form-group col-md-2">
                                <label for="cep">CEP</label>
                                <input name="cep" type="text" class="form-control" value="<?php echo $cep ; ?>" name="cep" id="cep">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-8">
                                <label for="rua">Rua</label>
                                <input name="rua" type="text" class="form-control" id="rua" value="<?php echo $rua ; ?>" placeholder="Av brasil">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="numero">N°</label>
                                <input name="numero" type="number" class="form-control" id="numero" value="<?php echo $num ; ?>" placeholder="1234">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <label for="compl">Complemento</label>
                                <input type="text" name="compl" class="form-control" value="<?php echo $compl ; ?>" id="complemento"
                                    placeholder="Casa, Apt, bloco e condominio">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="bairro">Bairro</label>
                                <input name="bairro" type="text" class="form-control" id="bairro" placeholder="jardim ">
                            </div>

                        </div>
                        <span><br></span>

                        <button type="submit" class="btn btn-primary mybutton">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
<!-- TABLE -->
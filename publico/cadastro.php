<?php include "../includes/nav.php" ?>

<!-- CADASTRO PAGE-->
<main class="container">
    <div class="projeto">
        <h2 class="title">Cadastro</h2>
    </div>
    <form method="post" action="recebecadastro.php">
        <div class="form-group">
            <label for="nome">Nome completo:</label>
            <input required name="nome" type="text" class="form-control" id="nome" placeholder="Nome completo">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="rg">RG</label>
                <input name="rg" required type="text" class="form-control" id="rg" placeholder="123.456-78">
            </div>
            <div class="form-group col-md-6">
                <label for="cpf">CPF</label>
                <input required name="cpf" type="text" class="form-control" id="cpf" placeholder="123.456.789-10">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="data">Data de nascimento</label>
                <input required name="data" type="text" class="form-control" id="data" placeholder="01/02/1990">
            </div>
            <div class="form-group col-md-6">
                <label for="cartaoSUS">Cartão do SUS</label>
                <input required name="cartaoSUS" type="text" class="form-control" id="cartaoSUS" placeholder="700000000000">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="telefone">Telefone fixo</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(19) 1234-5678">
            </div>
            <div class="form-group col-md-6">
                <label for="celular">Celular</label>
                <input required name="celular" type="text" class="form-control" id="celular" placeholder="(19) 99999-9999">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="celularRecado">Celular para recado</label>
                <input type="text" name="celularRecado" class="form-control" id="celularRecado" placeholder="(19) 99999-9999">
            </div>
            <div class="form-group col-md-6">
                <label for="parente">Grau de parentesco</label>
                <select class="custom-select" name="parente" required>
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
            <input required name="email" type="email" class="form-control" id="email" placeholder="maria@rosadobem.com">
        </div>
        <div class="form-group">
            <label for="confirmar">Confirmar e-mail</label>
            <input name="confirmar" type="text" class="form-control" id="email" placeholder="maria@rosadobem.com">
        </div>

        <div>
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="cep">CEP</label>
                    <input name="cep" type="text" class="form-control" value="" name="cep" id="cep">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="rua">Rua</label>
                    <input name="rua" type="text" class="form-control" id="rua" placeholder="Av brasil">
                </div>
                <div class="form-group col-md-4">
                    <label for="numero">N°</label>
                    <input required name="numero" type="number" class="form-control" id="numero" placeholder="1234">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="compl">Complemento</label>
                    <input required type="text" name="compl" class="form-control" id="complemento"
                        placeholder="Casa, Apt, bloco e condominio">
                </div>
                <div class="form-group col-md-8">
                    <label for="bairro">Bairro</label>
                    <input required name="bairro" type="text" class="form-control" id="bairro" placeholder="jardim ">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label for="cidade">Cidade</label>
                    <input required name="cidade" type="text" class="form-control" id="cidade">
                </div>
                <div class="form-group col-md-5">
                    <label for="uf">Estado</label>
                    <input required name="uf" type="text" class="form-control" id="uf">
                </div>
            </div>
            <span><br></span>
            <div class="form-row">
                <div class="form-group col-md-2">
                </div>
                <div class="form-group col-md-4">
                    <label for="docRG">RG (FRENTE E VERSO)</label>
                    <input type="file" class="form-control-file" id="docRG">
                </div>
                <div class="form-group col-md-5">
                    <label for="docCPF">CPF</label>
                    <input type="file" class="form-control-file" id="docCPF">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-2">
                </div>
                <div class="form-group col-md-4">
                    <label for="docSUS"> Cartão do SUS (Frente e verso) </label>
                    <input type="file" class="form-control-file" id="docSUS">
                </div>
                <div class="form-group col-md-5">
                    <label for="docEndereco">Comprovante de endereço</label>
                    <input type="file" class="form-control-file" id="docEndereco">
                </div>
            </div>
            <span><br></span>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input is-invalid" type="checkbox" value="aceito" name="aceito" id="aceito" required>
                    <label class="form-check-label" for="aceito">
                        Li e estou de acordo com os <a href="#">Termos de uso</a>.
                    </label>
                    <div class="invalid-feedback">
                        Você deve concordar antes de se cadastrar.
                    </div>
                </div>
            </div>


            <button type="submit" class="btn btn-primary mybutton">Enviar</button>
        </div>
    </form>
</main>
<!-- CADASTRO PAGE-->

<?php include "../includes/rodape.php" ?>

<script>
    $(document).ready(function ($) {
        $("#cpf").mask("000.000.000-00");
        $("#telefone").mask("(00) 0000-0000");
        $("#cep").mask("00.000-000");
        $("#data").mask("00/00/0000");
        $("#celular").mask("(00) 00000-0000");

        $("#rg").mask("999.999.999-w", {
            translation: {
                'w': {
                    pattern: /[Xx0-9]/
                }
            },
            reverse: true
        })

        $("#celular").mask("(00) 00000-0009");
        $("#celularRecado").mask("(00) 00000-0009");
        $("#cartaoSUS").mask("000 0000 0000 0000");


        $(document).ready(function () {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }

            //Quando o campo cep perde o foco.
            $("#cep").blur(function () {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if (validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });
    })
</script>

</body>

</html>
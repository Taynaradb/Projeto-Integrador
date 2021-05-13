<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- shortcut icon -->
    <link href="images/heartbig.png" rel="shortcut icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- personalized css -->
    <link href="css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

    <!-- START OF NAV BAR -->
    <div class="menu-bar sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html">Rosa do bem</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="projeto.html">Projeto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="direito.html">Direitos & Leis</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="campanha.html">Campanha 2021</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- END OF NAV BAR -->

    <!-- CADASTRO PAGE-->
    <main class="container">
        <div class="projeto">
            <h2 class="title">Cadastro</h2>
        </div>
        <form action="querecebe.php" method="post">
            <div class="form-group">
                <label for="nome">Nome completo:</label>
                <input required type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="rg">RG</label>
                    <input required type="text" name="rg" class="form-control" id="rg" placeholder="123.456-78">
                </div>
                <div class="form-group col-md-6">
                    <label for="cpf">CPF</label>
                    <input required type="text" name="cpf" class="form-control" id="cpf" placeholder="123.456.789-10">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="data">Data de nascimento</label>
                    <input required type="date" name="data" class="form-control" id="data" placeholder="01/02/1990">
                </div>
                <div class="form-group col-md-6">
                    <label for="cartaoSUS">Cartão do SUS</label>
                    <input required type="text" name="cartaoSUS" class="form-control" id="cartaoSUS"
                        placeholder="700000000000">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="telefone">Telefone fixo</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="(19) 1234-5678">
                </div>
                <div class="form-group col-md-6">
                    <label for="celular">Celular</label>
                    <input required type="text" name="celular" class="form-control" id="celular"
                        placeholder="(19) 99999-9999">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="celularRecado">Celular para recado</label>
                    <input type="text" name="celularRecado" class="form-control" id="celularRecado"
                        placeholder="(19) 99999-9999">
                </div>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input required type="email" name="email" class="form-control" id="email"
                    placeholder="maria@rosadobem.com">
            </div>
            <div class="form-group">
                <label for="confirmarEmail">Confirmar e-mail</label>
                <input type="text" class="form-control" name="confirmarEmail" id="confirmarEmail"
                    placeholder="maria@rosadobem.com">
            </div>

            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="cep">CEP</label>
                    <input type="text" class="form-control" name="cep" value="" name="cep" id="cep">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="rua">Rua</label>
                    <input name="rua" type="text" name="rua" class="form-control" id="rua" placeholder="Av brasil">
                </div>
                <div class="form-group col-md-4">
                    <label for="casaNum">N°</label>
                    <input  type="text" name="casaNum" class="form-control" id="casaNum" placeholder="1234" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="compl">Complemento</label>
                    <input required type="text" name="compl" class="form-control" id="compl"
                        placeholder="Casa, Apt, bloco e condominio">
                </div>
                <div class="form-group col-md-8">
                    <label for="bairro">Bairro</label>
                    <input required name="bairro" name="bairro" type="text" class="form-control" id="bairro"
                        placeholder="jardim ">
                </div>

            </div>
            <div class="form-row">
                <div class="form-group col-md-7">
                    <label for="cidade">Cidade</label>
                    <input required name="cidade" name="cidade" type="text" class="form-control" id="cidade">
                </div>
                <div class="form-group col-md-5">
                    <label for="uf">Estado</label>
                    <input required name="uf" name="uf" type="text" class="form-control" id="uf">
                </div>
            </div>
            <span><br></span>
            <button type="submit" class="btn btn-primary mybutton">Enviar</button>
        </form>
    </main>
    <!-- CADASTRO PAGE-->


    <!-- START OF FOOTER-->
    <footer>
        <div class="footer-content">
            <h5>Rosa do Bem</h5>

            <ul class="socials">
                <li><a href="#"><img src="images/instagram.png"></a></li>
                <li><a href="#"><img src="images/facebook.png"></a></li>
                <li><a href="#"><img src="images/whatsapp.png"></a></li>
                <li><a href="#"><img src="images/email.png"></a></li>
            </ul>
        </div>
        <div class="footer-copyright text-center py-3">
            <p>&copy; Copyright
                <a href="#">Rosadobem.com.br</a>
            </p>
            <p>Designed By TDB</p>
        </div>
    </footer>
    <!-- END OF FOOTER-->

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- MASK -->
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function ($) {
            $("#cpf").mask("000.000.000-00");
            $("#telefone").mask("(00) 0000-0000");
            $("#cep").mask("00.000-000");
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
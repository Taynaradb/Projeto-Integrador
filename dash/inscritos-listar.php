<?php include "../includes/dash-nav.php";  ?>

<?php
include "../includes/config.php";

$sqlBusca = "SELECT * FROM inscricao";
$listaDeInscritos = mysqli_query($conn, $sqlBusca);

?> 

<!-- TABLE -->
<div class="container">
    <div class="container">
        <div class="container">
            <div>
                <table class="table table-hover mt-5 ms-5 me-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Idade</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Celular</th>
                            <th scope="col">Bairro</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                while($inscrito = mysqli_fetch_assoc($listaDeInscritos)){
                                    echo "<tr>";
                                    echo "<td>{$inscrito['id']}</td>";
                                    echo "<td>{$inscrito['nome']}</td>";
                                    echo "<td>{$inscrito['dataNasci']}</td>";
                                    echo "<td>{$inscrito['telefone']}</td>";
                                    echo "<td>{$inscrito['celular']}</td>";
                                    echo "<td>{$inscrito['bairro']}</td>";
                                    echo "<td><a href='inscritos-formulario-alterar.php?id_inscritos={$inscrito['id']}'><img src='../images/alterar.png'></a> ";
                                    echo "<a href='inscritos-excluir.php?id={$inscrito['id']}'><img src='../images/excluir.png'></a></td>";
                                    echo "</tr>";
                                }

                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- TABLE -->
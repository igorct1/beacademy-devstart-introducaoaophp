<?php
$a1 = array("nome"=>"Igor", "email"=>"igorct77@gmail.com", "cidade"=>"São Paulo");
$a2 = array("nome"=>"Maicon", "email"=>"maiconstudio77@hotmail.com", "cidade"=>"São Paulo");
$a3 = array("nome"=>"Giulia", "email"=>"maiconstudio77@hotmail.com", "cidade"=>"São Paulo");
$a4 = array("nome"=>"Elisabete", "email"=>"maiconstudio77@hotmail.com", "cidade"=>"São Paulo");
$a5 = array("nome"=>"Manuella", "email"=>"maiconstudio77@hotmail.com", "cidade"=>"São Paulo");
$a6 = array("nome"=>"Maicon", "email"=>"maiconstudio77@hotmail.com", "cidade"=>"São Paulo");

$alunos = [
    $a1,
    $a2,
    $a3,
    $a4,
    $a5,
];

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr></hr>
<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
        <?php 
            
            ?>
        </tr>
    </thead>
    <tbody>
            <?php 
                foreach($alunos as $cadaAluno) {
                    echo "<tr></tr>";
                    foreach($cadaAluno as $valor) {
                        echo "<td>{$valor}</td>";
                    }
                }
            ?>
    </tbody>
</table>
</div>
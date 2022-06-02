<?php
    if(isset($_POST)) {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
    }

    if(isset($_POST['soma'])) {
        echo $n1 + $n2;
    }if (isset($_POST['subtracao'])) {
        echo $n1 - $n2;
    }if (isset($_POST['multiplicacao'])) {
        echo $n1 * $n2;
    }if(isset($_POST['divisao'])){
        echo $n1 / $n2;
    }

?>


<form action="" method="POST">
    <fieldset>Calculadora
    <br>
    <br>
    <input type="number" name="n1" placeholder="Numero 1">
    <br>
    <input type="number" name="n2" placeholder="Numero 2">
    <br>
    <br>
    <button name="soma">Somar</button>
    <button name="subtracao">Subtrair</button>
    <button name="multiplicacao">Multiplicar</button>
    <button name="divisao">Dividir</button>
</fieldset>
</form>

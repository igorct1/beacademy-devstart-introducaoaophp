<form method="POST">
    <label>Data</label>
    <br>
    <select>
        <option> -- Selecione o Ano -- </option>
        <?php 
            for($ano = 2022; $ano >= 1900; $ano--) {
                echo "<option>{$ano}</option>";
            }
        ?>  
    </select>
    <br>
    <select>
        <option> -- Selecione o Mês -- </option>
        <?php 
            for($mes = 1; $mes <= 12; $mes++) {
                echo "<option>{$mes}</option>";
            }
        ?>  
    </select>
    <br>
    <select>
        <option> -- Selecione o Dia -- </option>
        <?php 
            for($dia = 1; $dia <= 31; $dia++) {
                echo "<option>{$dia}</option>";
            }
        ?>  
    </select>
    <br>

</form>

<?php
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    // Exercicio letra musical com for
    for ($i = 0; $i<=10; $i++) {
        echo "Ai se eu te pego, ai ai <br>";
    }
?>


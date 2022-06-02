<form action="" method="POST">
    <input type="text" name="nome" placeholder="Por favor, digite o seu nome">
    <input type="text" name="idade" placeholder="Por favor, digite a sua idade">
    
    <button type="submit">Enviar</button>
</form>

<?php
    if(isset($_POST)) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
    }

    echo $nome;
    echo "<br>";
    echo $idade;
?>
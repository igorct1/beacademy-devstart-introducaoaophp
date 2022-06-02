<form method="post">
    <input type="text" name="nome" placeholder="Digite aqui">
    <button>Enviar</button>
</form>

<?php

    if(isset($_POST)){
        echo $_POST['nome'];
    }

?>
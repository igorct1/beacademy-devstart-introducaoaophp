<h1>Editar contato</h1>
<hr>
<form method="POST">
    <input value="<?php echo $nome; ?>" name="nome" class="form-control mb-3" type="text"placeholder="Nome">

    <input value="<?php echo $email; ?>" name="email" class="form-control mb-3" type="text"placeholder="Email">

    <input value="<?php echo $telefone; ?>"name="telefone" class="form-control mb-3" type="text" placeholder="Telefone">

    <button class="btn btn-primary">Enviar</button>
</form>
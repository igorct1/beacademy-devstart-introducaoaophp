<h1>Listar Contatos</h1>

<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
            <td>Nome</td>
            <td>Email</td>
            <td>Telefone</td>
            <td>Ações</td>

        </tr>
    </thead>
    <tbody>
        <?php 
                foreach($contatos as $index => $cadaContato) {
                    echo "<tr>";
                    $partes = explode(";", $cadaContato);
                    $nome = $partes[0];
                    $email = $partes[1];
                    $telefone = $partes[2];
                    echo "<td>{$nome}</td>";
                    echo "<td>{$email}</td>";
                    echo "<td>{$telefone}</td>";
                    echo "<td>
                        <a href='/excluir?id={$index}' class='btn btn-danger btn-sm'>Excluir</a>
                        <a href='/editar?id={$index}' class='btn btn-warning btn-sm'>Editar</a>
                    </td>";
                    
                    echo "</tr>";
                }
        ?>
    </tbody>
</table>
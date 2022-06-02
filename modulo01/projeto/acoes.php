<?php
function home() {
    include 'telas/home.php';
}
function login() {
    include 'telas/login.php';
}
function cadastro() {
    if(($_POST)) {
        // se o usuario enviar o formulario
        // pegar as informações
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone']; 
        //abrir o arquivo utilizando o fopen, precisa de 2 parametros
        // nome do arquivo e permissão
        $arquivo = fopen('dados/contatos.csv', 'a+');
        // escrever no arquivo utilizando fwrite
        fwrite($arquivo, "{$nome};{$email};{$telefone}".PHP_EOL);
        // fechar arquivo para evitar consumo de memória
        fclose($arquivo);
        // Usuario cadastrado, mensagem de sucesso
        $mensagem = 'Usuário cadastrado com sucesso!';
        include 'telas/mensagem.php';
    }
    include 'telas/cadastro.php';
}
function listar() {
    $contatos = file('dados/contatos.csv');
    include 'telas/listar.php';
}

function erro404() {
    include 'telas/404.php';
}
function excluir() {
    $id = $_GET['id'];
    $contatos = file('dados/contatos.csv');
    unset($contatos[$id]);
    
    unlink('dados/contatos.csv');
    $arquivo = fopen('dados/contatos.csv', 'a+');

    foreach($contatos as $cadaContato) {
        fwrite($arquivo, $cadaContato);
    }
    $mensagem = "Pronto, seu contato foi excluido!";
    include 'telas/mensagem.php';
}
function editar() {
    $id = $_GET['id'];
    $contatos = file('dados/contatos.csv');

    if($_POST) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $contatos[$id] = "{$nome};{$email};{$telefone}".PHP_EOL;

        unlink('dados/contatos.csv');

        $arquivo = fopen('dados/contatos.csv', 'a+');
        foreach($contatos as $cadaContato) {
            fwrite($arquivo, $cadaContato);
        }
        
        fclose($arquivo);
        $mensagem = 'Pronto, contato atualizado';
        include 'telas/mensagem.php';
    }
    
    $dados = explode(";", $contatos[$id]);
    $nome = $dados[0];
    $email = $dados[1];
    $telefone = $dados[2];

    include 'telas/editar.php';
}
?>
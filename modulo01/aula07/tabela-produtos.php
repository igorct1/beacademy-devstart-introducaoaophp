<?php 
    //Nome, preço, descrição e foto.
    //5 Produtos
    $mouse = array('Nome'=> "Mouse", "Preço" => "345.99", "Descrição" => "Mouse Logitech G600", "Foto" => "https://m.media-amazon.com/images/I/81SvhwIiyAL._AC_SX450_.jpg");
    $teclado = array('Nome'=> "Teclado", "Preço" => "450", "Descrição" => "Teclado HyperX Alloy FPS", "Foto" => "https://img.kalunga.com.br/fotosdeprodutos/671809d_1.jpg");
    $headset = array('Nome'=> "Headset", "Preço" => "280", "Descrição" => "Headset Cloud Stinger", "Foto" => "https://m.media-amazon.com/images/I/51kxIEmO+ZL._AC_SX450_.jpg");
    $mousepad = array('Nome'=> "Mousepad", "Preço" => "130", "Descrição" => "Mousepad Fallen Candy Speedy", "Foto" => "https://images.kabum.com.br/produtos/fotos/128512/mousepad-gamer-fallen-candy-speed-estendido-900x400mm-_1600947238_gg.jpg");
    $monitor =  array('Nome'=> "Headset", "Preço" => "1400", "Descrição" => "Monitor Acer 165hz", "Foto" => "https://images.kabum.com.br/produtos/fotos/307704/monitor-gamer-acer-nitro-qg241y-p-23-8-led-full-hd-165hz-1ms-hdmi-displayport-freesync-premium-preto-um-qq1aa-s03_1643815428_gg.jpg");
    $produtos = [
        $mouse,
        $teclado,
        $headset,
        $mousepad,
        $monitor
    ];
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
    <h1 class="mt-5" style="text-align:center;">Produtos</h1>
    <hr></hr>
<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
        <?php 
            foreach($produtos[0] as $chave => $valor) {
                echo "<th>$chave</th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
            <?php 
                foreach($produtos as $produto) {
                    echo "<tr>";
                    foreach($produto as $chave => $valor) {
                        if($chave == "Foto"){
                            echo "<td><img width='100px' height='100px' src='{$valor}'></td>";
                            continue;
                        } 
                        echo "<td style='padding: 20px 10px'>{$valor}</td>";
                    }
                    echo "</tr>";
                }
            ?>
    </tbody>
</table>
</div>
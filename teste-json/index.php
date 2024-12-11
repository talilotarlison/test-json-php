<?php
    # Link --> https://pt.stackoverflow.com/questions/235598/como-ler-e-interpretar-um-arquivo-json-com-php

    # URL do arquivo JSON
    $url = 'https://pastebin.com/raw/nCuRUpAh';

    # Obtém o conteúdo do arquivo JSON
    $json = file_get_contents($url);

    # Decodifica o JSON para um array associativo
    $data = json_decode($json, true);

    # Exibe os dados
    print_r($data["artists"][0]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InstaBytes</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/byte.ico">
    <meta name="description" content="Explore o mundo com Viagem Dev! Veja fotos inspiradoras e histórias de viagens incríveis.">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <h1>Teste json</h1>
        <section>
            <div>
                <input type="text" placeholder="nome" id="nome"> 
                <input type="number" placeholder="idade" id="idade">
                <input type="email" placeholder="email" id="email"> 
                <button id="btn">Inscrever-se</button> 
            </div>   
        </section>  
    </header>

    <main class="profile-container">
        <section class="profile-header">
        <?php
		
		  foreach ($data["artists"] as $key => $dados) {
				$chave = ucfirst($key);
				echo "<li>". $chave .":" .$dados["name"] ."<img src='".$dados["urlImg"]."'></li>";
			}
		?>
		
        </section>

    </main>
    <script src="app.js"></script>
</body>
</html>
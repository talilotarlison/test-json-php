<?php
    // Pegando o parâmetro 'x' da URL
    $json = $_GET['dados'];

    // Decodificando o JSON para um array associativo ou objeto
    $obj = json_decode($json,true); // Passando `true` para retornar um array associativo
   print_r($json);

    // Agora você pode acessar as chaves do array associativo
    echo "Name: " . $obj['nome'] . "<br>";
    echo "Age: " . $obj['idade'] . "<br>";
    echo "City: " . $obj['email'] . "<br>";
    // echo "aqui";

// https://pt.stackoverflow.com/questions/468831/salvar-dados-de-formul%c3%a1rio-em-txt-php

    if (isset($_GET['dados'])) {
        $texto = $_GET['dados'];
     
        $arquivo = fopen('msg.txt', 'w');
        fwrite($arquivo, $texto);
        fclose($arquivo);
     }

?>

<?php
    // Conteúdo a ser salvo no arquivo
    $conteudo = "Este é o conteúdo do meu arquivo de texto.";

    // Abrir ou criar o arquivo para escrita
    $fp = fopen("meu_arquivo.txt", "w");

    // Escrever o conteúdo no arquivo
    fwrite($fp, $conteudo);

    // Fechar o arquivo
    fclose($fp);

    echo "Arquivo salvo com sucesso!";
?>


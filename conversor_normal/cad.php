<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor normal</title>
</head>
<body>
    
    <h1>O Numero convertido</h1>
  
    <?php 

      //conversao D3
      // echo" \$$num" ecvrever o $
        $valor = $_GET["conv"];
        $conv = 5.15;
        $valorc = $valor / $conv;

        echo "Seu valor de R\$". number_format($valor, 2, ",", "."). " foi convertindo em deolar em: USD". number_format($valorc, 2, ",", ".");

        //formatacao de moedas com internaionalizacao!
        //intl
        $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);
        echo "<p>O valor ". numfmt_format_currency($padrao, $valor, "BRL"). "foi convertido em: ". numfmt_format_currency($padrao, $valorc, "USD") ;

    ?>
</body>
</html>
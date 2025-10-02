<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>RESULTADO API</title>
</head>
<body>
    <h1>RESULTADO API</h1>

    <?php 
        //recebendo variaveis
        $nome = $_REQUEST["Nome"]?? "sem nome";
        $snome = $_REQUEST["Snome"]?? "sobre nome";
        $num = $_REQUEST["num"]?? 0;
        //iniciando URL
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        //convertendo a URL em dados
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        //exibindo o resultado
        $convertido = $num / $cotacao;
        $padrao = numfmt_create("PT_BR", NumberFormatter::CURRENCY);
        echo "<p>Ola $nome $snome o seu valor de ". numfmt_format_currency($padrao,$num, "BRL")." foi convertido pelo preco do dolar atual que esta em ".numfmt_format_currency($padrao,$cotacao, "USD"). " o valor convertido foi de ". numfmt_format_currency($padrao,$convertido, "USD");
    ?>
   
</body>
</html>
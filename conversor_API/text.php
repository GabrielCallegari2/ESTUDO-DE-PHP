<pre>
<?php 
    //colocado a url dentro de uma varialvel. 
    $inicio = date("m-d-Y", strtotime("-7days"));
    $fim = date("m-d-Y");
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
 
    //tranformando a varialvel(URL) em dados php.
    //json_decode() tranforma em estrutura php.
    //file_get_contents($url) le o conteudo da varariavel de documentos e URL.
    //TRUE= array \\ FALSE= objet.
    $dados = json_decode(file_get_contents($url), true);
    //pegando o dado usando var_dump($dados).
    //usando as $dado["value"][0]["cotacaoCompra"].
    var_dump($dados);
    $conversor = $dados["value"][0]["cotacaoCompra"];
    echo "<br> $conversor";
    $data = $dados["value"][0]["dataHoraCotacao"];
    echo "<br>$data";
  

    

?> 
</pre>   

    




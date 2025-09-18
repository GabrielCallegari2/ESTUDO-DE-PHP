<?php 
    //indices aarays
    echo"<p>Array um conjunto de variaveis dentro de uma so";
    $jogos= array ("corda", "bola", "taco");
    echo"<p>Indices sao numeros que comeca em 0";
    echo "<p>Para chamar coloca a var entre []";
    echo "<p>".$jogos[0];

    
    echo "<p>É o numero de elementos que ela tem Count()";
    echo "<p>". count($jogos);

    //associative array
    echo "<p>Associative array Da um nome para o indice e voce chama por esse nome a sequencia de 0,1,2 continua pulando a associacao";
    $idade = array("gabriel"=>"20", 19);
    echo "<p>".$idade[0];
    $dados = array( 1, array("numero2"=> array(10,array(1))), 3);
    echo "<p>". $dados[1]["numero2"][1][0];


    echo "<p> DA para colocar dois valores usando a associative";

    $dois = [[
        "gabriel" => 19, 
        "fiochi" => "20"
    ],
    [
        "lucas"=> 20,
        "silva"=> "10"
    ]
    ];
    echo "<p>". $dois[1]["lucas"];

?>
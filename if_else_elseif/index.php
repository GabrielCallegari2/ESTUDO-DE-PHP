<?php 
   
    $num = 12;
    $num2 = "12";
    //codigo base  
    if ($num !== $num2){
        echo "<p>true";
    };

    if ($num > 10){
        echo "<p>MAIOR";
    }
    elseif($num == 10){
        echo "<p>IGUAL";
    }
    else{
        echo "<p>MENOR";
    };  

    echo "<p> ( IF )= Se/verdadeiro.";
    echo "<p> ( ELSEIF )= Se o de cima for falso e esse verdadeiro.";
    echo "<p> ( ELSE )= Se nao/falso.";
    // MAIOR >
    // MENOR <
    // IGUAL ==
    // MAIOR OU IGUAL >=
    // MENOR OU IGUAL <=
    // DIFERENTE !=/<>
    // IDENTICO === 
    // NAO IDENTICO !== 
    
    echo "<P>1: ( > ) MAIOR";
    echo "<P>2: ( >= ) MAIOR IGUAL";
    echo "<P>3: ( > ) MENOR";
    echo "<P>4: ( <= ) MENOR IGUAL";
    echo "<p>5: ( == ) IGUAL  ( Mesmo que tipos diferentes(string,float, int...))";
    echo "<p>6: ( == ) IDENTICO ( De valor e tipo)";
    echo "<p>7: ( != ) DIFERENTE ( Ignorando os tipos da variavel)";
    echo "<p>8: ( !== ) NAO IDENTICO   ( Da verdadeiro se uma das duas for falsa tipo/valor)";
    
    //ordem logica 
    echo "<p>Ordem logica comesa com as comparacoes <>, >, != ... e depois vem && e ||";
    echo "<p>Colocar entre parentes() para a ordem que quiser";

    //treino
    $n1= 9;
    $n2= 10;
    $n3 = 10;
    if(($n1 > $n2 && $n1 < $n2) || $n1 == $n2 && ($n3 == $n2)){
        echo "<p>Verdadeiro";
    }else{
        echo "<p>Falso";
    }
?>
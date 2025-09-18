<?php 
    // switch SERVE PARA VERIFICAR O VALOR DA VARIAVEL E EXECUTAR DIFENETES BLOCOS DE CODIGOS
    $nome = "gabriel";
    $nome2 = "gustavo";

    echo "<p>SWITCH BASICO: ";
    switch ($nome){
        case "gabriel";
            echo "<p>voce é gabriel";
        break;

        case "gustavo";
            echo "voce é gustavo";
        break;
        
        default:
        echo "Nome nao encontrado";
        
    }

    echo'<p>PODE USAR MAIS CASE DENTRO DE UM SWITCH:';
    switch($nome){
        case "gabriel";
        case "gustavo";
            echo "<p>voce é gabriel e gustavo";
        break;
    }

    echo '<p>PODE USAR UM SWITCH DENTRO DE OUTRO SWITCH:';
    switch($nome){
        case "gabriel";
            $snome = "lucas" ;
            echo "<p>nome ";
            switch($snome){
                case "lucas";
                    echo "<p>sobre nome";
                break;
            }
        break;
    }

    echo "<p>PODE COMBINAR VALOR DE VARIVEIS USANDO \"-\" ";
    switch($nome. "-". $snome){
        case "gabriel-lucas";
            echo "<p> colocar o valor da variavel e nao declarar ela ( gabriel-lucas )";
        break;
    }
?>
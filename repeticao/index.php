<?php 
    $n1 = 10;
     echo "<p>WHILE = ENQUANTO";
     echo "<p>FOR";
     //for($i=0; $i < 10; $i++)
     //($i++)$i = $i + 2 Repete de dois em 2
     for($i=0; $i <= 10; $i++){
        echo "<br>$i";    
     }
   
     echo "<p>foreach = PARACADA";
     echo "<p>variavel_contadora / chaves => valores";

     $nomes = ["gabriel", "fiochi", "callegari"];
     foreach($nomes as $index => $name){
          echo "<p> Posicao: $index = $name";
     };

     echo"<p> Primeiro verifica se é verdadeiro depois executa WHILE";
     $valor = 10;
     while ($valor <= 90) {
          $valor = $valor + 10;
          echo "<p>" .$valor. "<br>";
     }

     
     echo"<p>Primeiro executa depois comfirma DO WHILE";
     $valor = 10;
     do {
          $valor = $valor + 10;
          echo "<p>" .$valor. "<br>";
          
     } while ($valor >= 90);
?>
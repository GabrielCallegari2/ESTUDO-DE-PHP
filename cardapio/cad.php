<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>
</head>
<body>
  

    <?php 
         
          //recebendo variaveis
          $comida = $_REQUEST["comida"]??null;
          $bebida = $_REQUEST["bebida"]??null;
          $sobrem = $_REQUEST["sobremesa"]??null;
          $todos = $_REQUEST["todos"]??null;            

          //programando if else qual comida escolheu
          if($comida == "COMIDA"){
               echo "<p>VOCE ESCOLHEU COMIDA!";
               echo "<p>1: PIZZA DE FRANFO";
               echo "<p>2: PIZZA DE CALABRESA";
               echo "<p>3: PIZZA TRADICIONAL";        
             
          }elseif($bebida == "BEBIDA"){
               echo "<p>VOCE ESCOLHEU BEBIDA!";
               echo "<p>1: SUCO DE UVA";
               echo "<p>2: SUCO DE LIMAO";
               echo "<p>3: SUCO DE ABACAXI";
              
          }elseif($sobrem == "SOBREMESA"){
               echo "<p>VOCE ESCOLHEU SOBREMESA!";
               echo "<p>1: BOLO DE CHOCOLATE";
               echo "<p>2: TORTA DE MORANGO";
               echo "<p>3: SORVETE DE LEITE";
                              
          }elseif($todos == "TODOS"){
               echo "<p>VOCE ESCOLHEU TODOS!";
               echo "<p>1: TODAS AS PIZZAS";
               echo "<p>2: TODAS AS BEBIDAS";
               echo "<p>3: TODAS AS SOBREMESAS";
                    
          }else{
               echo"<p> Prato nao encontrado";
          };
          
     ?>
    


</body>
</html>
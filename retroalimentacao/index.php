<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <?php 
        //capturando os dados do formulario
        $n1 = $_REQUEST["num"]?? 0;    
        $n2 = $_REQUEST["num2"]?? 0;    
       //retro alimentaçao action="<?= $_SERVER["PHP_SELF"]?

    ?>
    <main> 
        <form action="<?= $_SERVER["PHP_SELF"]?>"  method="get">
                
            <label for="varlor">valor1</label>
            <br>
            <input type="number" name="num" id="num" value="<?= $n1 ?>">
            <br>

            <label for="varlor">valor2</label>
            <br>
            <input type="number" name="num2" id="num2" value="<?= $n2?>">
            <br>

            <button>enviar</button>
        </form>
    </main>
    <?php 
        $r = $n1 + $n2;
        echo $r;
        
    ?>
    
   

   

</body>
</html>
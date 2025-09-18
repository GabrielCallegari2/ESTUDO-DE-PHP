<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudando php</title>
</head>
<body>
    <h1>Me livrando da maldiçao!!</h1>
    <input type="number" name="num" id="num">
    <?php 
       // date_default_timezone_set("America/Sao_Paulo");
        //echo'hoje é dia! ' . date("d/M/Y");
       // echo' E a hora é ' . date("G:i:s");

        //$nom = "Gabriel";
        //$snom = "Callegari";

        //echo "$nom $snom \" Fiochi\"";

        //const NOME = "gabriel";
        //echo "ola, " . NOME;

        $dados = [
            ["nome"=>"wendel","idade"=>23, "cpf"=> "100"],
            ["nome1"=>"gabriel","idade"=>20,"cpf1"=> "200"]
        ];
        $num = $_REQUEST["num"];
        
        
        if ($num <= "10") {
           echo "<p> perdeu";
        }

    ?>
</body>
</html>
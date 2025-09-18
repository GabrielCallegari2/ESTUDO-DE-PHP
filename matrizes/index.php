<pre>
<?php 
    echo "<p>MATRIZ um conjuntos de array/vetores";
    echo "<p>MATRIZ numerica";

   $numeros = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [9, 10, 11],

    ];
   echo "<p>". $numeros[3][1];

   $nomes = [
        ["gabriel", "fiochi", "callegari"],
        ["lucasss", "santos", "aparecido"],
        [0, 1, 2]
   ];

   echo "<p>". $nomes[2][2];
   echo "<p>$/nomes nomes[1]['nome1']  ";
?>
</pre>
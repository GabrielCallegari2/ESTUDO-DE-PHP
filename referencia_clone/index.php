<?php

    //referencia e clonogem de objetos

    class pessoa{
        public $idade;

        public function __clone(){
            echo"Aparece quando clona usando  '__clone' ";
        }
    }

    $pessoa = new pessoa();
    $pessoa-> idade=25;

    //clone: clona o valor aseguir
    $pessoa2= clone $pessoa;
    $pessoa2->idade=35;

    echo "<br>". $pessoa2->idade;


?>
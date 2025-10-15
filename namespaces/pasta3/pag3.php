<?php
//namespace nomeia outra pagina de php
namespace php3;

    class nome3{
        public $nome= "santos";
    }
    $nome3= new nome3();

    //require abre outras paginas de php
    // "" ../ "" abre pasta do mesmo nivel
    require "../pasta1/pag1.php";
    require "../pasta2/pag2.php";
    require "pastaD1/pagD1.php";

    echo "<br>NOME: ".$nome1->getnome(). " ".$nome2->nome." ".$nome3->nome;

    echo "<br> APELIDO: ".$nome4->nome;   
    echo "<br> QUERO: gabriel fichi santos";
?>
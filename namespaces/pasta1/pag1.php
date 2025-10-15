<?php
namespace php1;

    class nome1{
        public $nome;

        public function getnome(){return $this->nome;}
        public function setnome($e){$this->nome=$e;}
    }
    $nome1= new nome1();
    $nome1->setnome("gabriel");
?>
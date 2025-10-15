<?php

    class email{
        protected $email;

        public function getemail(){return $this->email;}

        public function Setemail($e){

            if(!filter_var($e,FILTER_VALIDATE_EMAIL)){
                throw new Exception("Email Invalido", 1);
                
            }else{
                $this->email= $e;
                echo"Logado com sucesso!!!";
            }
           
        }
        
    }

    $email= new email();
    echo "<br>".$email->getemail();

    try {

        $email->Setemail("gab@");

    } catch (Exception $e) {
        echo "<br>MENSSAGEM: ". $e->getMessage();
        echo "<br>CODIGO: ". $e->getCode();
    }

?>
   

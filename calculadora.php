<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <?php

    class Pessoa{
        public $nome;
        private $cpf;
        private $dn;

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($a){
            $this->cpf = $a;
        }
        

        public function getDn(){
            return $this->dn;
        }

        public function setDn($b){
            $this->dn = $b;
        }

        public function Falar(){
            if($this->nome == "Nicson Souza Nascimento"){
                echo"Ele fala muito";
            }else{
                echo"Ele não fala muito";
            }
        }
    }
    
            $pessoa1 = new Pessoa();
            $pessoa1->nome = "Nicson Souza Nascimento";
            $pessoa1->setCpf("06810346538");
            $pessoa1->setDn("20/09/1994");
            $pessoa1->Falar();echo"<br>";
            
            print_r($pessoa1);

            $pessoa2 = new Pessoa();
            $pessoa2->nome = "Samire Barreto da Conceição"; 
            $pessoa2->setCpf("05873243506");
            $pessoa2->setDn("01/06/1993");echo"<br>";
            $pessoa2->Falar(); echo"<br>";

            print_r($pessoa2);
            ?>
</body>
</html>
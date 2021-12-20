<?php
class Caneta
{
    private $tampada;
    public $carga;
    public $cor;
    public $modelo;
    public $ponta;
    private $marca;

    function Tampar()
    {
        if ($this->tampada == true) {
            echo "Não posso rabiscar<br>";
        } else {
            echo "Posso rabiscar<br>";
        }
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($a)
    {
        $this->marca = $a;
    }

    public function setTampada($b)
    {
        $this->tampada = $b;
    }
}

$caneta1 = new Caneta();

$caneta1->carga = "Cheia";
$caneta1->cor = "Azul";
$caneta1->modelo = "Esferográfica";
$caneta1->ponta = 0.7;
$caneta1->getMarca();
$caneta1->setMarca("Bic");
$caneta1->setTampada("true");
$caneta1->Tampar();

print_r($caneta1);

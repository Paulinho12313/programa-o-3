<?php
class Carro {
    private $modelo;
    private $cor;
    private $ano;

    
    public function __construct($modelo, $cor, $ano) {
        $this->modelo = $modelo;
        $this->cor = $cor;
        $this->ano = $ano;
    }


    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    
    public function getCor() {
        return $this->cor;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    
    public function getAno() {
        return $this->ano;
    }

    public function setAno($ano) {
        $this->ano = $ano;
    }
}
?>
<?php
$carro = new Carro("fusca", "azul", 2013);

echo $carro->getModelo(); // fusca
echo "\n";
echo $carro->getCor();    // azul
echo "\n";
echo $carro->getAno();    // 2013

$carro->setCor("Vermelho");
echo "\nNova cor: " . $carro->getCor(); // Branco
?>

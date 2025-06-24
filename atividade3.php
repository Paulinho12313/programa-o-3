<?php
// Observação: fiz a atividade A, B e C todas juntas
class ContaBancaria {
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial) {
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar($valor) {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar($valor) {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }

    public function getTitular() {
        return $this->titular;
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

// Exemplo de uso
$conta = new ContaBancaria("Maria", 100);
$conta->depositar(50);
$conta->sacar(30);

echo "Titular: " . $conta->getTitular() . "<br>";
echo "Saldo: " . $conta->getSaldo();
?>

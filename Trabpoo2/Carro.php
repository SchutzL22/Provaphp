<?php
require_once 'Veiculo.php';

class Carro extends Veiculo {
    private $portas;

    public function __construct($marca, $modelo, $portas) {
        parent::__construct($marca, $modelo);
        $this->portas = $portas;
    }

    public function getPortas() {
        return $this->portas;
    }

    public function info() {
        return "Carro: {$this->marca} {$this->modelo} - {$this->portas} portas.";
    }
}
?>
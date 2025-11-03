<?php
require_once 'Veiculo.php';

class Moto extends Veiculo {
    private $cilindradas;

    public function __construct($marca, $modelo, $cilindradas) {
        parent::__construct($marca, $modelo);
        $this->cilindradas = $cilindradas;
    }

    public function getCilindradas() {
        return $this->cilindradas;
    }

    public function info() {
        return "Moto: {$this->marca} {$this->modelo} - {$this->cilindradas} cilindradas.";
    }
}
?>
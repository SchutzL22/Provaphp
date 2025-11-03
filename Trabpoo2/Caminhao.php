<?php
require_once 'Veiculo.php';

class Caminhao extends Veiculo {
    private $capacidadeCarga;

    public function __construct($marca, $modelo, $capacidadeCarga) {
        parent::__construct($marca, $modelo);
        $this->capacidadeCarga = $capacidadeCarga;
    }

    public function getCapacidadeCarga() {
        return $this->capacidadeCarga;
    }

    public function info() {
        return "Caminhão: {$this->marca} {$this->modelo} - Carga: {$this->capacidadeCarga} Ton.";
    }
}
?>
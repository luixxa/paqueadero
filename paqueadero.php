<?php
class Vehiculo {
    public $placa;
    public $marca;
    public $color;


    public function __construct($placa, $marca, $color) {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->color = $color;
    }
}

class Cliente {
    public $nombre;
    public $documento;
    
    public function __construct($nombre, $documento) {
        $this->nombre = $nombre;
        $this->documento = $documento;
    }
}

class Espacio {
    public $piso;
    public $numero;
    public $ocupado = false;
    public $vehiculo;

    public function __construct($piso, $numero) {
        $this->piso = $piso;
        $this->numero = $numero;
    }
}

class Ticket {
    public $horaEntrada;
    public $horaSalida;
    public $valorPagar;
    public $vehiculo;

    public function calcularValor() {
       
    }
}

class Parqueadero {
    private $espacios = [];

    public function __construct() {
        for ($i = 1;
         $i <= 4;
          $i++) {
            for ($j = 1; $j
             <= 10; 
             $j++) {
                $this->espacios[] = new Espacio($i, $j);
            }
        }
    }

    public function estacionarVehiculo(Vehiculo $vehiculo, Cliente $cliente) {
    }

    public function buscarVehiculo($placa) {
    }
}


$parqueadero = new Parqueadero();
$placaABuscar = 'AAA123';

$ticket = $parqueadero->buscarVehiculo($placaABuscar);

if ($ticket) {
    echo "Placa: {($ticket)->vehiculo->placa}\n";
    echo "Marca: {($ticket)->vehiculo->marca}\n";
   
} else {
    echo "Vehículo no encontrado";
    }
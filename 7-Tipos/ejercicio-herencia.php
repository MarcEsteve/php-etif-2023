<?php

//Ejercicio: Crea de la misma estructura que clase-animal-herencia.php, la superclase Vehiculo, y las subclases Coche, Avion y Barco. Vehiculo tendrá al menos 1 atributo y 2 metodos específicos. Después cada sbuclase Coche, Avion y Barco tendrán al menos 1 atributo y 1 método específico

// Definición de la superclase Vehiculo
class Vehiculo {
    protected $marca;
    protected $modelo;
    protected $matricula;
    protected $precio;
    
    public function __construct($marca, $modelo) {
      $this->marca = $marca;
      $this->modelo = $modelo;
    }
  
    public function getMarca() {
      return $this->marca;
    }
  
    public function getModelo() {
      return $this->modelo;
    }
  
    public function arrancar() {
      echo $this->marca . " " . $this->modelo . " está arrancando...\n";
    }
}

// Definición de la subclase Coche, que hereda de laclase Vehiculo
class Coche extends Vehiculo {
    private $volante;
  public function acelerar() {
    echo $this->marca . " " . $this->modelo . " está acelerando...\n";
  }
  //Métodos setter/getter para $volante
  public function setVolante($volante) {
    $this->volante = $volante;
  }
  public function getVolante() {
    return $this->volante;
  }
}

// Definición de la subclase Avion, que hereda de laclase Vehiculo
class Avion extends Vehiculo {
    private $alas;
  public function despegar() {
    echo $this->marca . " " . $this->modelo . " está despegando...\n";
  }
  //Métodos setter/getter para $alas
  public function setAlas($alas) {
    $this->alas = $alas;
  }
  public function getAlas() {
    return $this->alas;
  }
}

// Definición de la subclase Barco, que hereda de laclase Vehiculo
class Barco extends Vehiculo {
    private $eslora;
  public function navegar() {
    echo $this->marca . " " . $this->modelo . " está navegando...\n";
  }
  //Métodos setter/getter para $eslora
  public function setEslora($eslora) {
    $this->eslora = $eslora;
  }
  public function getEslora() {
    return $this->eslora;
  }
}

// Creación de objetos a partir de las subclases
$coche = new Coche("Ford", "Mustang");
$avion = new Avion("Boeing", "747");
$barco = new Barco("Royal Caribbean", "Oasis of theSeas");

// Uso de los métodos heredados de la superclase
echo $coche->getMarca() . " " . $coche->getModelo() ."<br>";
$coche->arrancar();
echo "<br>";
echo $avion->getMarca() . " " . $avion->getModelo() ."<br>";
$avion->arrancar();
echo "<br>";
echo $barco->getMarca() . " " . $barco->getModelo() ."<br>";
$barco->arrancar();
echo "<br>";

// Uso de los métodos específicos de las subclases
$coche->acelerar();
$coche->setVolante("izquierda");
echo "El volante esta en la posición " . $coche->getVolante();
echo "<br>";
$avion->despegar();
$avion->setAlas(4);
echo "El avión tiene " . $avion->getAlas() . " alas";
echo "<br>";
$barco->navegar();
$barco->setEslora(362);
echo "El barco tiene " . $barco->getEslora() . "m de eslora";
  
?>
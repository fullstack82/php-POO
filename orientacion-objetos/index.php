<?php
// Programacion orientada a objetos en PHP (POO)

// Definir una clase (molde para crear más objetos de tipo coche con caracteristicas similares o parecidas);
// Las clases se definen con Mayusculas;
class Coche {

    // Atributos o propiedades (variables);

    public $color = "lila";
    public $marca = "alpha";
    public $modelo = "sport";
    public $velocidad = 250;
    public $caballos = 400;
    public $plazas = 5;

    // Metodos, son acciones que hace el objeto (antes funciones)
    public function getColor(){
        // Busca en esta clase la propiedad X
        return $this->color;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function acelerar(){
        $this->velocidad++;
    }

    public function frenar(){
        $this->velocidad--;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }
}
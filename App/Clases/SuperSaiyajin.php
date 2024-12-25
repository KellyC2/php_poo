<?php
/**MODIFICADORES DE ACCESO
 * public: Acceso desde cualquier parte del programa, incluyendo otras clase e instancias de objetos.
 * protected:Acceso solo en la misma clase y en las clases que se heredan
 * private:Acceso solo en la misma clase.
 */

namespace App\Clases;

class SuperSaiyajin extends Saiyajin
{
    public string $clase = "Super saiyajin";
    public static string $cabello = "Rubio";
    public function Transformación()
    {
        if ($this->getNivelPelea() >= 1500) {
            $texto = $this->getNombre() . " se transformo en  " . $this->clase;
        } else {
            $texto = $this->getNombre() . " No se transformo  en " . $this->clase;
        }

        return $texto;
    }

    public static function MostrarColorCabello(){
        return "Tengo el cabello de color " . self::$cabello;
    }
    public static function NuevoMetodo(){
        return parent:: MostrarColorCabello();//Accede a una constante o a un mètodo  estàtico de la clase padre
    }

}
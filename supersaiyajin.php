<?php
/**MODIFICADORES DE ACCESO
 * public: Acceso desde cualquier parte del programa, incluyendo otras clase e instancias de objetos.
 * protected:Acceso solo en la misma clase y en las clases que se heredan
 * private:Acceso solo en la misma clase.
 */

class SuperSaiyajin extends Saiyajin
{
    public string $clase = "Super saiyajin";
    public function Transformación()
    {
        if ($this->getNivelPelea() >= 1500) {
            $texto = $this->getNombre() . " se transformo en  " . $this->clase;
        } else {
            $texto = $this->getNombre() . " No se transformo  en " . $this->clase;
        }

        return $texto;
    }

}
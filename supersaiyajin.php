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
        if ($this->nivel_pelea >= 1500) {
            $texto = $this->nombre . " se transformo en  " . $this->clase;
        } else {
            $texto = $this->nombre . " No se transformo  en " . $this->clase;
        }

        return $this->Saludar(). " - ". $texto;
    }

}
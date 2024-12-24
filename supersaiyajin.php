<?php

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

        return $texto;
    }


    public function NivelDePelea()
    {
       $nivel=$this->nivel_pelea*2;
       return $this->nombre. " aumento su nivel de pelea a ". $nivel;
    }
}
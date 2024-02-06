<?php

class Enana
{
    private $nombre; // Nombre de la enana
    private $puntosVida; // Valor de la vida que posee
    private $situacion; // La enana estará 'viva', 'muerta' o 'limbo', dependiendo de sus puntos de vida. >0 = viva;
                        // <0 = muerta; =0 = limbo

    public function __construct($a1,$a2)
    {
        $this->nombre=$a1;
        $this->puntosVida=$a2;
        if ($a2 > 0) {
            $this->situacion = "viva";
        } elseif ($a2 < 0) {
            $this->situacion = "muerta";
        } else {
            $this->situacion = "limbo";
        }
    }

    public function heridaLeve(){
        $this->puntosVida -= 10;
        if ($this->puntosVida <= 0) {
            $this->puntosVida = 0;
            $this->situacion = "limbo";
        }
    }

    public function heridaGrave(){
        $this->puntosVida = 0;
        $this->situacion = "limbo";
    }

    public function pocima(){
        if ($this->situacion != "limbo") {
            $this->puntosVida += 10;
            if ($this->puntosVida > 0) {
                $this->situacion = "viva";
            }
        }
    }

    public function pocimaExtra(){
        if ($this->situacion == "limbo") {
            $this->puntosVida = 50;
            $this->situacion = "viva";
        }
    }

    // Getter's & Setter's
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;
        return $this;
    }

    public function getPuntosVida()
    {
        return $this->puntosVida;
    }

    public function setPuntosVida($puntosVida): self
    {
        $this->puntosVida = $puntosVida;
        return $this;
    }

    public function getSituacion()
    {
        return $this->situacion;
    }

    public function setSituacion($situacion): self
    {
        $this->situacion = $situacion;
        return $this;
    }
}
?>

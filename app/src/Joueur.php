<?php

namespace Src;

class Joueur
{
    public $cash;

    public function encaisser($somme)
    {
        $this->cash = $this->cash + $somme;
        echo $this->cash;
    }

    public function payer($somme)
    {
        $this->cash = $this->cash - $somme;
        echo $this->cash;
    }

    public function acheter($prixBien)
    {
        $this->cash = $this->cash - $prixBien;
        echo $this->cash;
    }

    public function vendre($prixBien)
    {
        $this->cash = $this->cash + $prixBien;
        echo $this->cash;
    }
}
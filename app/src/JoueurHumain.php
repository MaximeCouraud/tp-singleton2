<?php
/**
 * Created by PhpStorm.
 * User: COURAUD
 * Date: 31/03/2019
 * Time: 15:23
 */

namespace Src;

use src/Joueur;

class JoueurHumain extends Joueur
{
    public $cash = 50000;
    public $position;

    public function lancerDes($valeurDes)
    {
        $this->position = $this->position + $valeurDes;
        echo $this->position;
    }
}
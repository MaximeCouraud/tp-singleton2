<?php

namespace Src;

require "../../vendor/autoload.php";

use src\Joueur;

class Banque extends Joueur
{
    public $cash = 100000;

}

$banque = new Banque;
$banque->payer(2000);

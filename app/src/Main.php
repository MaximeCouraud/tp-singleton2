<?php
/**
 * Created by PhpStorm.
 * User: COURAUD
 * Date: 31/03/2019
 * Time: 15:27
 */

namespace Src;

class Main
{
    public function parler()
    {
        echo 'Je suis un main';
    }
}

$main = new Main;
$main ->parler();
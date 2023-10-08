<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    public function soma($a, $b)
    {
        return $a + $b;
    }

    public function subtracao($a, $b)
    {
        return $a - $b;
    }

    public function divisao($a, $b)
    {
        return $a / $b;
    }

    public function multiplicacao($a, $b)
    {
        return $a * $b;
    }
}

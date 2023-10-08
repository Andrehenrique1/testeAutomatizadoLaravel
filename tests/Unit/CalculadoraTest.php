<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testSoma()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(4, $calculadora->soma(2, 2));
    }

    public function testSubtracao()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(2, $calculadora->subtracao(4, 2));
    }

    public function testDivisao()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(3, $calculadora->divisao(6, 2));
    }

    public function testMultiplicacao()
    {
        $calculadora = new Calculadora();
        $this->assertEquals(8, $calculadora->multiplicacao(4, 2));
    }
}

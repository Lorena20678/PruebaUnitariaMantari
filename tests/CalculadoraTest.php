<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase
{
    public function testSumar()
    {
        $calc = new Calculadora();
        $resultado = $calc->sumar(5, 3);
        $this->assertEquals(8, $resultado);
    }
    public function testRestar()
    {
        $calc = new Calculadora();
        $resultado = $calc->restar(10,4);
        $this->assertEquals(6, $resultado);
    }

        public function testMultiplicar()
    {
        $calc = new Calculadora();
        $resultado = $calc->multiplicar(10,4);
        $this->assertEquals(20, $resultado);
    }

        public function testDividir()
    {
        $calc = new Calculadora();
        $resultado = $calc->dividir(10,4);
        $this->assertEquals(5, $resultado);
    }

        public function testDividirEntreCero()
    {
        $this->expectException(\Exception::class);
        $calc = new Calculadora();
        $calc->dividir(10,0);
    }
}
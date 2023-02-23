<?php
require_once 'Calcul.php';
use PHPUnit\Framework\TestCase;

/**
 * Calcul test case.
 */
class CalculTest extends TestCase
{

    public function testSomme()
    {
        $calcul = new Calcul();
        $this->assertEquals(5, $calcul->somme(2, 3));
        $this->assertEquals(1, $calcul->somme(-2, 3));
        $this->assertEquals(0, $calcul->somme(0, 0));
    }
}


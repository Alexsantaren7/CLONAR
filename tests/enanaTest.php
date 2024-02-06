<?php

use PHPUnit\Framework\TestCase;
include './src/Enana.php';

class EnanaTest extends TestCase {
    
    public function testCreandoEnana() {
        $enana1 = new Enana("Gimli", 50);
        $this->assertEquals("Gimli", $enana1->getNombre());
        $this->assertEquals(50, $enana1->getPuntosVida());
        $this->assertEquals("viva", $enana1->getSituacion());

        $enana2 = new Enana("Thorin", -20);
        $this->assertEquals("Thorin", $enana2->getNombre());
        $this->assertEquals(-20, $enana2->getPuntosVida());
        $this->assertEquals("muerta", $enana2->getSituacion());

        $enana3 = new Enana("Fili", 0);
        $this->assertEquals("Fili", $enana3->getNombre());
        $this->assertEquals(0, $enana3->getPuntosVida());
        $this->assertEquals("limbo", $enana3->getSituacion());
    }

    public function testHeridaLeveVive() {
        $enana = new Enana("Dwalin", 30);
        $enana->heridaLeve();
        $this->assertEquals(20, $enana->getPuntosVida());
        $this->assertEquals("viva", $enana->getSituacion());
    }

    public function testHeridaLeveMuere() {
        $enana = new Enana("Balin", 5);
        $enana->heridaLeve();
        $this->assertEquals(0, $enana->getPuntosVida());
        $this->assertEquals("limbo", $enana->getSituacion());
    }

    public function testHeridaGrave() {
        $enana = new Enana("Oin", 15);
        $enana->heridaGrave();
        $this->assertEquals(0, $enana->getPuntosVida());
        $this->assertEquals("limbo", $enana->getSituacion());
    }
    
    public function testPocimaRevive() {
        $enana = new Enana("Bombur", -5);
        $enana->pocima();
        $this->assertEquals(5, $enana->getPuntosVida());
        $this->assertEquals("viva", $enana->getSituacion());
    }

    public function testPocimaNoRevive() {
        $enana = new Enana("Gloin", 0);
        $enana->pocima();
        $this->assertEquals(0, $enana->getPuntosVida());
        $this->assertEquals("limbo", $enana->getSituacion());
    }

    public function testPocimaExtraLimbo() {
        $enana = new Enana("Nori", 0);
        $enana->pocimaExtra();
        $this->assertEquals(50, $enana->getPuntosVida());
        $this->assertEquals("viva", $enana->getSituacion());
    }
}
?>

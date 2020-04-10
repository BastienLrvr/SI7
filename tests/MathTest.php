<?php

//bibliothèque de test
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{
  public function testDouble()
  {
    //verifie si le double de 2 est égale à 4
    $this->assertEquals(4, \App\Math::double(2));
  }

  public function testTtc()
  {
    $this->assertEquals(120, \App\Math::ttc(100));
  }

  public function testPareil()
  {
    $this->assertSame(false,\App\Math::pareil(10,'test'));
  }

  public function testPlus()
  {
    $this->assertGreaterThanOrEqual(false,\App\Math::plus(90,100));
  }
}

?>

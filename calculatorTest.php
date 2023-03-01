<?php
include "Calculator.php";
use PHPUnit\Framework\Testcase;
class calculatorTest extends Testcase{
    public function testAddNumber(){
        $c1 = new Calculator();
        $this->assertEquauls(15,$c1->addNumber(5,10));
        $this->assertEquauls(-1,$c1->addNumber(5,10));
    }
}
?>
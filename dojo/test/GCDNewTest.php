<?php

include '../src/GCDClass.php';
class GCDNewTest  extends PHPUnit_Framework_TestCase {

    private $_GDCObj = null;
    /**
     * @return GCDClass
     */
    public function setup()
    {
        $this->_GDCObj = new GCDClass();
    }

    /**
     * @test
     */
    public function shouldReturnZeroForAllZeroAsAInput()
    {
        $this->assertEquals(0, $this->_GDCObj->getGCD(0, 0));
    }

    /**
     * @test
     */
    public function shouldReturn1ForAll1AsInput(){
        $this->assertEquals(1, $this->_GDCObj->getGCD(1, 1));
    }

    /**
     * @test
     */
    public function shouldReturn1ForInputAs1_2(){
        $this->assertEquals(1, $this->_GDCObj->getGCD(1, 2));
    }

    /**
     * @test
     */
    public function shouldReturn2ForInputAs2_4(){
        $this->assertEquals(2, $this->_GDCObj->getGCD(2, 4));
    }

    /**
     * @test
     */
    public function shouldReturn2ForInputAs4_6(){
        $this->assertEquals(2, $this->_GDCObj->getGCD(4, 6));
        $this->assertEquals(4, $this->_GDCObj->getGCD(8, 12));
        $this->assertEquals(6, $this->_GDCObj->getGCD(18, 84));
        $this->assertEquals(6, $this->_GDCObj->getGCD(18, 48));
        $this->assertEquals(12, $this->_GDCObj->getGCD(48, 180));
        $this->assertEquals(1, $this->_GDCObj->getGCD(9, 28));
        $this->assertEquals(1, $this->_GDCObj->getGCD(2, 3));
        //$this->assertEquals(6, $this->_GDCObj->getGCD(48, 18));
    }

}

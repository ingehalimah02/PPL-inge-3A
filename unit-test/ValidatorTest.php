<?php
//file : Validator.php
use PHPUnit\Framework\TestCase;

require_once 'Validator.php';

class ValidatorTest extends TestCase
{
    //=== Test Age ===
    public function testValidate()
    {
        $this->assertTrue(validateAge(30));
        $this->assertTrue(validateAge(-30));
    }
    public function testEmpetyAgeThrowsExpection()
    {
        $this->expectException(InvalidArgumentException::class);
        validateAge("");
    }
}
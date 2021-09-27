<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;

final class FizzTest extends TestCase
{
    public function testForInt(): void
    {
        $fizz = new FizzBuzz;
        $val = $fizz->convert(1);
        $this->assertSame("1", $val);
    }

    public function testForDivThree(): void
    {
        $fizz = new FizzBuzz;
        $val = $fizz->convert(9);
        $this->assertSame("fizz", $val);
    }

    public function testForDivFive(): void
    {
        $fizz = new FizzBuzz;
        $val = $fizz->convert(5);
        $this->assertSame("buzz", $val);
    }

    public function testForDivFifteen(): void
    {
        $fizz = new FizzBuzz;
        $val = $fizz->convert(15);
        $this->assertSame("fizzbuzz", $val);
    }

    public function testForDigitThree(): void
    {
        $fizz = new FizzBuzz;
        $val = $fizz->convert(3);
        $this->assertSame("lucky", $val);
    }

}
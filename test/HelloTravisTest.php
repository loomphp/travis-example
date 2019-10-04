<?php

declare(strict_types=1);

namespace LoomTest\Template;

use InvalidArgumentException;
use Loom\Travis\HelloTravis;
use PHPUnit\Framework\TestCase;

class HelloTravisTest extends TestCase
{
    public function testSetGreetingPerConstructor()
    {
        $greeting = 'Hello Travis!';
        $travis = new HelloTravis($greeting);
        $this->assertSame($greeting, $travis->getGreeting());
    }

    public function testSetGreetingPerMethod()
    {
        $greeting = 'Hello Travis!';
        $travis = new HelloTravis($greeting);
        $travis->setGreeting($greeting);
        $this->assertSame($greeting, $travis->getGreeting());
    }

    public function testSetGreetingToNull()
    {
        $travis = new HelloTravis();
        $travis->setGreeting(null);
        $this->assertNull($travis->getGreeting());
    }

    public function testInvalidArgumentForGreetingShouldThrowException()
    {
        $this->expectException(InvalidArgumentException::class);
        $travis = new HelloTravis();
        $travis->setGreeting('');
    }
}

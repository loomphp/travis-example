<?php

declare(strict_types=1);

namespace Loom\Template;

use Loom\Travis\HelloTravis;
use PHPUnit\Framework\TestCase;

class HelloTravisTest extends TestCase
{
    public function testDefaultGreeting(): void
    {
        $helloTravis = new HelloTravis();
        $this->assertEquals(
            'Hello Travis',
            $helloTravis->getGreeting()
        );
    }
}

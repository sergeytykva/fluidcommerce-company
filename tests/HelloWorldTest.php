<?php

namespace tests;

use \HelloWorld;
class HelloWorldTest extends TestCase
{
    public function testHello(): void
    {
        $helloWorld = new HelloWorld();

        self::assertSame('Hello World!', $helloWorld->hello());
    }
}

<?php

namespace ngt\test;

use phpDocumentor\Reflection\Types\Self_;
use PHPUnit\Framework\TestCase;

class CounterStaticTest extends TestCase{

    public static Counter $counter;

    public static function setUpBeforeClass(): void
    {
        self::$counter = new Counter();
    }

    public function testFirst(){
        self::$counter->increment();
        self::assertEquals(1, self::$counter->getCounter());
    }

    public function testSecond(){
        self::$counter->increment();
        self::assertEquals(2, self::$counter->getCounter());
    }

    public static function tearDownAfterClass(): void
    {
        echo "unit Test Selesai" . PHP_EOL;
    }

}
<?php

namespace ngt\test;

use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CounterTest extends TestCase
{

    private Counter $counter;

    protected function setUp(): void
    {
        $this->counter = new Counter();
        echo "membuat Counter". PHP_EOL;
    }

    public function testIncrement()
    {
        self::markTestIncomplete("Todo do counter again");
        self::assertEquals(0, $this->counter->getCounter());
        echo "test test". PHP_EOL;
        // TODO not complete
    }

    public function testCounter()
    {
        
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());

        $this->counter->increment();
        $this->assertEquals(2, $this->counter->getCounter());

        $this->counter->increment();
        self::assertEquals(3, $this->counter->getCounter());
    }

    // public function testOther()
    // {
    //     echo "other" . PHP_EOL;
    // }

    /**
     * @test
     */
    public function increment()
    {
        self::markTestSkipped("masih ada error yang bingung");
        $this->counter->increment();
        Assert::assertEquals(1, $this->counter->getCounter());
    }

    public function testFirst(): Counter
    {
        
        $this->counter->increment();
        $this->assertEquals(1, $this->counter->getCounter());

        return $this->counter;
    }

    /**
     * @depends testFirst
     */

     public function testSecond(Counter $counter): void
     {
        $counter->increment();
        $this->assertEquals(2, $counter->getCounter());  
     }

     protected function tearDown(): void
     {
        echo "Tear Down" . PHP_EOL;
     }

     /**
      * @after
      */

     protected function after(): void
     {
        echo "after" . PHP_EOL;
     }

     /**
      * @requires OSFAMILY Windows
      */
     public function testOnlyWindows(){
        self::assertTrue(true, "only in Windows");
     }

     /**
      * @requires PHP >= 8
      */
     public function testOnlyPhp8(){
        self::assertTrue(true, "Only for PHP 8");
     }
}


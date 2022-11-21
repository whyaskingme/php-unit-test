<?php

namespace ngt\test;

use Exception;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase{

    private person $person;

    protected function setUp(): void
    {
       
    }

    /**
     * @before
     */
    public function createPerson(){
        $this->person = new person("Eko");
    }

  

    public function testsuccess(){
       
        self::assertEquals("Hello budi, My name is Eko", $this->person->sayhello("budi"));
    }

    public function testsalah(){
        
        $this->expectException(\Exception::class);
        $this->person->sayhello(null);
    }

    public function testgoodbyesuccess(){
        
        $this->expectOutputString("good bye budi". PHP_EOL);
        $this->person->saygoodbye("budi");
    }

}
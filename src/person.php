<?php

namespace ngt\test;

class person
{
    public function __construct(private string $name)
    {   
    }

    public function saygoodbye(?string $name): void {
        echo "good bye $name". PHP_EOL;
    }

    public function sayhello(?string $name){
        if ($name == null) throw new \Exception("name is null");

        return "Hello $name, My name is $this->name";
    }
}

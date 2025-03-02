<?php

namespace Src;

class App{
    private string $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function index(): void{
        echo $this->name;
    }
    public static function greed(): void{
        echo "greed\n";
    }
    
}
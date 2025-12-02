<?php


namespace Nschernthaner\Test1;

require 'vendor/autoload.php';

class Person
{
    private $vorname;
    private $nachname;

    public function __construct($vorname, $nachname){
        $this->vorname = $vorname;
        $this->nachname = $nachname;

    }

    public function GetName()
    {
        return $nachname . $vorname;
    }

}
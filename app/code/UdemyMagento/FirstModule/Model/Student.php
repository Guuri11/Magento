<?php


namespace UdemyMagento\FirstModule\Model;


class Student
{
    protected $name;
    protected $age;
    protected $score;

    public function __construct( string $name = "Sergio", int $age = 20, array $score = ['daw'=>10, 'dwes'=>10])
    {
        $this->name = $name;
        $this->age = $age;
        $this->score = $score;
    }

}

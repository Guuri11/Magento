<?php


namespace UdemyMagento\FirstModule\Model;


use UdemyMagento\FirstModule\Api\SizeInterface;

class Big implements SizeInterface
{

    public function getSize()
    {
        return "big";
    }
}

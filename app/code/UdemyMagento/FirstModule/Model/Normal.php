<?php


namespace UdemyMagento\FirstModule\Model;


use UdemyMagento\FirstModule\Api\SizeInterface;

class Normal implements SizeInterface
{

    public function getSize()
    {
        return "normal";
    }
}

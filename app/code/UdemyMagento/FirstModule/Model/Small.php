<?php


namespace UdemyMagento\FirstModule\Model;


use UdemyMagento\FirstModule\Api\SizeInterface;

class Small implements SizeInterface
{

    public function getSize()
    {
        return "small";
    }
}

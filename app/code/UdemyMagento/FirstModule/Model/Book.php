<?php


namespace UdemyMagento\FirstModule\Model;

use UdemyMagento\FirstModule\Api\BookInterface;
use UdemyMagento\FirstModule\Api\ColorInterface;
use UdemyMagento\FirstModule\Api\SizeInterface;

class Book implements BookInterface
{
    protected $color;
    protected $size;

    public function __construct(ColorInterface $color, SizeInterface $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getBookType()
    {
        return "The book is ".$this->color->getColor()." and his size is ".$this->size->getSize();

    }
}

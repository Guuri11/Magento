<?php


namespace UdemyMagento\FirstModule\Model;


use UdemyMagento\FirstModule\NotMagento\PencilInterface;
use UdemyMagento\FirstModule\Api\ColorInterface;
use UdemyMagento\FirstModule\Api\SizeInterface;

class Pencil implements \UdemyMagento\FirstModule\Api\PencilInterface
{
    protected $color;
    protected $size;
    protected $custom;

    public function __construct(ColorInterface $color, SizeInterface $size, $custom = null)
    {
        $this->color = $color;
        $this->size = $size;
        $this->custom = $custom;
    }

    public function getPencilType()
    {
        return "The pencil is ".$this->color->getColor()." and his size is ".$this->size->getSize();
    }
}

<?php


namespace UdemyMagento\FirstModule\Model;

use UdemyMagento\FirstModule\Api\BrightnessInterface;
use UdemyMagento\FirstModule\Api\ColorInterface;

class Red implements ColorInterface
{
    protected $brightness;

    public function __construct(BrightnessInterface $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "red";
    }
}

<?php


namespace UdemyMagento\FirstModule\Model;


class HeavyService
{
    public function __construct()
    {
        echo 'HeavyService has been instantiated';
    }

    public function printSelf()
    {
        echo 'message from HeavyService class';
    }

}

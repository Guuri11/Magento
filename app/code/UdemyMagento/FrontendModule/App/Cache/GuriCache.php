<?php


namespace UdemyMagento\FrontendModule\App\Cache;


use Magento\Framework\App\Cache\Type\FrontendPool;
use Magento\Framework\Cache\Frontend\Decorator\TagScope;
use Magento\Framework\Config\CacheInterface;

class GuriCache extends TagScope implements CacheInterface
{
    const TYPE_IDENTIFIER = 'guri_cache';
    const CACHE_TAG = 'GURI-CACHE';

    public function __construct(FrontendPool $frontend, $tag)
    {
        parent::__construct($frontend->get(self::TYPE_IDENTIFIER),self::CACHE_TAG);
    }
}

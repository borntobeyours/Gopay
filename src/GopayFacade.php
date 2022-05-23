<?php

namespace Borntobeyours\Gopay;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Borntobeyours\Gopay\Skeleton\SkeletonClass
 */
class GopayFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gopay';
    }
}

<?php

namespace CaoMinhDuc\Masterdata;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CaoMinhDuc\Masterdata\Skeleton\SkeletonClass
 */
class MasterdataFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'masterdata';
    }
}

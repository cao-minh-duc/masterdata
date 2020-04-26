<?php

namespace CaoMinhDuc\Masterdata;

use CaoMinhDuc\Masterdata\Repository;

class Masterdata
{
    public $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public static function __callStatic($method,array $arguments = [])
    {
        
        return app(self::class)->repository->$method(
            ...$arguments
        );
    } 
}

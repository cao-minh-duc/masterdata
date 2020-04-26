<?php
namespace CaoMinhDuc\Masterdata;

use CaoMinhDuc\Masterdata\Model;


class Repository
{
    public static function create(?array $data = NULL): Model
    {
        $model = Model::create(['data'=>$data]);
        return $model;
    }
}
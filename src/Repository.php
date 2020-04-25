<?php
namespace CaoMinhDuc\Masterdata;

use CaoMinhDuc\Masterdata\Model;


class Repository
{
    public static function create(array $data)
    {
        return Model::create($data);
    }
}
<?php
namespace CaoMinhDuc\Masterdata;

use CaoMinhDuc\Masterdata\Model;


class Repository
{
    public function create(?array $data = NULL): Model
    {
        $model = Model::create(['data'=>$data]);
        return $model;
    }

    public function find($id): Model
    {
        $model = Model::find($id);
        return $model;
    }

    public function update(array $data,$id): bool
    {
        $model = Model::find($id);
        return $model->update([
            'data' => array_merge($model->data,$data)
        ]);
    }
}
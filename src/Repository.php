<?php
namespace CaoMinhDuc\Masterdata;

use CaoMinhDuc\Masterdata\Model;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Repository
{
    private Eloquent $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(?array $data = NULL): Eloquent
    {
        $model = $this->model->create(['data'=>$data]);
        return $model;
    }

    public function find($id): Eloquent
    {
        $model = $this->model->find($id);
        return $model;
    }

    public function update(array $data,$id): bool
    {
        $model = $this->model->find($id);
        return $model->update([
            'data' => array_merge($model->data,$data)
        ]);
    }
}
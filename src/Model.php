<?php
namespace CaoMinhDuc\Masterdata;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Model extends Eloquent
{
    

    protected $table = 'masterdata';

    protected $fillable = [
        'data'
    ];

    protected $casts = [
        'data' => 'array'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = (string) Str::uuid();
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }

}
<?php
namespace CaoMinhDuc\Masterdata\Tests\Support;

trait Data
{
    public function data()
    {
        return [
            [
                ['value' => 1]
            ],
            [
                ['value' => NULL]
            ],
            [
                ['value' => []]
            ]
        ];
    }
}
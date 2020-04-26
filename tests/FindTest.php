<?php
namespace CaoMinhDuc\Masterdata;

use CaoMinhDuc\Masterdata\Tests\Support\Data;
use CaoMinhDuc\Masterdata\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FindTest extends TestCase
{
    use RefreshDatabase,Data;

    /**
     * @test
     * @dataProvider data
     */
    public function find($data)
    {
        $masterdata = Masterdata::create($data);

        $this->assertEquals(
            $data,
            Masterdata::find($masterdata->id)->data
        );
    }
}
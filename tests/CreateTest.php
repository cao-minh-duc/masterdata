<?php
namespace CaoMinhDuc\Masterdata;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use CaoMinhDuc\Masterdata\Tests\TestCase;
use CaoMinhDuc\Masterdata\Tests\Support\Data;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateTest extends TestCase
{
    use RefreshDatabase, Data;

    /** 
     * @test
    */
    public function create_empty()
    {
        $masterdata = Masterdata::create();
        $this->assertTrue(Str::isUuid($masterdata->id));
        $this->assertDatabaseHas('masterdata',[
            'data' => NULL
        ]);
    }

    /**
     * @test
     * @dataProvider data
     */
    public function create($data)
    {
        $masterdata = Masterdata::create($data);
        
        $this->assertEquals($data['value'], $masterdata->data['value']);
        $this->assertDatabaseHas(
            'masterdata',
            [
                'data' => json_encode($data)
            ]
        );
    }
}
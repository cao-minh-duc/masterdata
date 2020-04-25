<?php
namespace CaoMinhDuc\Masterdata;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Str;
use CaoMinhDuc\Masterdata\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateTest extends TestCase
{
    use RefreshDatabase;

    /** 
     * @test
    */
    public function create()
    {
        $masterdata = Masterdata::create([]);
        $this->assertTrue(Str::isUuid($masterdata->id));
        $this->assertDatabaseHas('masterdata',[
            'data' => NULL
        ]);
    }
}
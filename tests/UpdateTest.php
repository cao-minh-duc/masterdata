<?php
namespace CaoMinhDuc\Masterdata;

use CaoMinhDuc\Masterdata\Tests\TestCase;
use CaoMinhDuc\Masterdata\Tests\Support\Data;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateTest extends TestCase
{
    use RefreshDatabase, Data;

    /**
     * @test
     * @dataProvider data
     */
    public function update($data)
    {
        $masterdata = Masterdata::create($data);

        Masterdata::update([
            'value' => 'Updated'
        ],
            $masterdata->id
        );

        $this->assertEquals(Masterdata::find($masterdata->id)->data['value'], 'Updated');
        $this->assertDatabaseHas('masterdata',[
            'data' => json_encode(['value' => 'Updated'])
        ]);
    }
}
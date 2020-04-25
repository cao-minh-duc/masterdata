<?php
namespace CaoMinhDuc\Masterdata;

use Illuminate\Support\Facades\Schema;
use CaoMinhDuc\Masterdata\Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MigrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function structure()
    {
        $this->assertTrue(Schema::hasTable('masterdata'));
        $this->assertTrue(Schema::hasColumn('masterdata','id'));
        $this->assertTrue(Schema::hasColumn('masterdata','data'));
        $this->assertTrue(Schema::hasColumn('masterdata','created_at'));
        $this->assertTrue(Schema::hasColumn('masterdata','updated_at'));
    }
}
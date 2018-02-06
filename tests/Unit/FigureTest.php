<?php

namespace Tests\Unit;

use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Figure;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class FigureTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * Can View Figure Detail
     *
     * @test
     */
    public function canViewFigureDetail()
    {
        $figure = factory(Figure::class)->create();
        $this->assertDatabaseHas('figures', $figure->toArray());
    }
}

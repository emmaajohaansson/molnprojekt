<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    /* @test */
    public function test_home_page()
    {

        $this->visit("/")
            ->see("GAMELINK.SE")
            ->dontSee("somethingelse");
    }

    public function test_games_page()
    {

        $this->visit("/games")
            ->see("No games")
            ->dontSee("Super mario!");
    }



}

<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;
    /* @test */
    public function test_goto_register()
    {
        $this->visit("/")
            ->see("GAMELINK.SE")
            ->see("LOGIN")
            ->see("Register")
            ->dontSee("somethingelse")
            ->click("Register")
            ->seePageIs("/register");
    }

    public function test_at_register_user()
    {
        $this->visit("/register")
            ->see("Username")
            ->see("Password")
            ->see("Confirm Password")
            ->dontSee("somethingelse");
    }
    

    public function test_register_user()
    {
        $this->visit("/register")
            ->type("testuser", "username")
            ->type("testpassword", "password")
            ->type("testpassword", "password_confirmation")
            ->press('Register')
            ->seePageIs("/");
    }

    public function test_goto_profile()
    {
        $this->visit("/")
            ->click('Profile')
            ->seePageIs("/myprofile");
    }


}

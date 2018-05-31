<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    
    /* @test */
    public function test_goto_register()
    {
        $this->artisan('migrate:refresh', [
            '--seed' => false,
        ]);

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
            ->seePageIs("/")
            ->see("Profile")
            ->see("Logout");
    }

    public function test_loggedin_user()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("testuser", "username")
            ->type("testpassword", "password")
            ->press("Login")
            ->seePageIs("/")
            ->click("Profile")
            ->seePageIs("/myprofile")
            ->see("Delete account")
            ->see("Add Game");
            
    }


    public function test_update_user()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("testuser", "username")
            ->type("testpassword", "password")
            ->press("Login")
            ->seePageIs("/")
            ->click("Profile")
            ->seePageIs("/myprofile")
            ->see("testuser")
            ->type("somethingnew", "username")
            ->type("somethingnew", "password")
            ->press("Update your information")
            ->seePageIs("/myprofile");
    }

    public function test_login_after_change_user()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("somethingnew", "username")
            ->type("somethingnew", "password")
            ->press("Login")
            ->seePageIs("/");
    }

    public function test_login_after_change_user_but_wrong_username()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("somethingneww", "username")
            ->type("somethingnew", "password")
            ->press("Login")
            ->seePageIs("/login");
    }

    public function test_login_after_change_user_but_wrong_password()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("somethingnew", "username")
            ->type("somethingneww", "password")
            ->press("Login")
            ->seePageIs("/login");
    }


    public function test_add_game()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("somethingnew", "username")
            ->type("somethingnew", "password")
            ->press("Login")
            ->seePageIs("/")
            ->visit("/myprofile")
            ->type("gameTitle", "title")
            ->type("gameDescription", "description")
            ->type("199", "price")
            ->type("https://starwarsblog.starwars.com/wp-content/uploads/2015/10/tfa_poster_wide_header-1536x864-959818851016.jpg", "image")
            ->press("Add game")
            ->seePageIs("/myprofile")
            ->visit("/games")
            ->see("gameTitle")
            ->see("gameDescription");
    }

    public function test_see_specific_game()
    {
        $this->visit("/games")
            ->see("gameTitle")
            ->see("gameDescription")
            ->click("gameTitle")
            ->seePageIs("/games/1")
            ->see("gameTitle")
            ->see("Added at:");
    }

    public function test_add_review_on_game()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("somethingnew", "username")
            ->type("somethingnew", "password")
            ->press("Login")
            ->seePageIs("/")
            ->visit("/games/1")
            ->select("4", "rating")
            ->type("this is a rating for a game", "comment")
            ->Press("Submit Review")
            ->visit("/games/1")
            ->see("this is a rating for a game");
    }


    public function test_delete_review_on_game()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("somethingnew", "username")
            ->type("somethingnew", "password")
            ->press("Login")
            ->seePageIs("/")
            ->visit("/games/1")
            ->select("4", "rating")
            ->type("second comment that will get removed in next test", "comment")
            ->press("Submit Review")
            ->visit("/games/1")
            ->see("second comment that will get removed in next test")
            ->see("this is a rating for a game")
            ->press("deletereview2")
            ->visit("/games/1")
            ->see("this is a rating for a game")
            ->dontSee("second comment that will get removed in next test");
    }


    public function test_remove_game()
    {
        $this->visit("/login")
            ->seePageIs("/login")
            ->type("somethingnew", "username")
            ->type("somethingnew", "password")
            ->press("Login")
            ->visit("/myprofile")
            ->type("gameTitle2", "title")
            ->type("gameDescription2", "description")
            ->type("1", "price")
            ->type("https://starwarsblog.starwars.com/wp-content/uploads/2015/10/tfa_poster_wide_header-1536x864-959818851016.jpg", "image")
            ->press("Add game")
            ->seePageIs("/myprofile")
            ->visit("/games")
            ->see("gameTitle")
            ->see("gameTitle2")
            ->visit("/myprofile")
            ->press("deletegame2")
            ->see("gameTitle")
            ->dontSee("gameTitle2");
        }




}

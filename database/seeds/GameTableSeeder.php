<?php

use Illuminate\Database\Seeder;

class GameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('games')->insert([
        [
          'name' => "Super mario!",
          'price' => 99,
          'description' => "Super Mario Bros. is a platform video game developed and published by Nintendo. Players control Mario (or his brother Luigi in the multiplayer mode) as they travel the Mushroom Kingdom to rescue Princess Toadstool from the antagonist, Bowser.",
          'ownerId' => 1,
          'image' => 'https://cdn.images.dailystar.co.uk/dynamic/184/photos/334000/620x/Super-Mario-Level-Up-Boardgame-605999.jpg'
        ],
        [
          'name' => "Star Wars 1983",
          'price' => 199,
          'description' => "Star Wars is an arcade game produced by Atari Inc. and released in 1983.[2] The game is a first person space combat game, simulating the attack on the Death Star from the 1977 film Star Wars. The game is composed of 3D color vector graphics. This game was developed during the Golden Age of Arcade Games and has appeared in lists of the greatest video games of all time.",
          'ownerId' => 1,
          'image' => 'https://starwarsblog.starwars.com/wp-content/uploads/2015/10/tfa_poster_wide_header-1536x864-959818851016.jpg'
        ],
        [
          'name' => "Star Wars: The Empire Strikes Back",
          'price' => 220,
          'description' => "Star Wars: The Empire Strikes Back is a scrolling shooter video game written by Rex Bradford for the Atari 2600 and published by Parker Brothers in 1982.[1] It was the first licensed Star Wars video game.[2] The game was released in 1983 for the Intellivision.",
          'ownerId' => 4,
          'image' => 'https://upload.wikimedia.org/wikipedia/en/f/f0/Atari_2600_The_Empire_Strikes_Back.jpg'
        ],
        [
          'name' => "Fortnite",
          'price' => 199,
          'description' => "Fortnite is a co-op sandbox survival game developed by Epic Games and People Can Fly and published by Epic Games. The game was released as a paid-for early access title for Microsoft Windows, macOS, PlayStation 4 and Xbox One on July 25, 2017, with a full free-to-play release expected in 2018. The retail versions of the game were published by Gearbox Publishing, while online distribution of the PC versions is handled by Epic's launcher.",
          'ownerId' => 2,
          'image' => 'https://i.ytimg.com/vi/wGB1aLDR2Es/maxresdefault.jpg'
        ],
        [
          'name' => "Grand Theft Auto V (GTA)",
          'price' => 199,
          'description' => "Grand Theft Auto V is an action-adventure video game developed by Rockstar North and ...... 'GTA 5 Costs $265 Million To Develop And Market, Making It The Most Expensive Video Game Ever Produced: Report. International Business Times.",
          'ownerId' => 3,
          'image' => 'https://images-na.ssl-images-amazon.com/images/I/91O2cwfTxDL._SL1500_.jpg'
        ],
        [
          'name' => "Player Unknown's Battlegrounds",
          'price' => 399,
          'description' => "PlayerUnknown's Battlegrounds (PUBG) is a multiplayer online battle royale game developed and published by PUBG Corporation, a subsidiary of publisher Bluehole. ... In the game, up to one hundred players parachute onto an island and scavenge for weapons and equipment to kill others while avoiding getting killed themselves.",
          'ownerId' => 1,
          'image' => 'https://cdn.images.express.co.uk/img/dynamic/143/590x/PUBG-886916.jpg'
        ],
        [
          'name' => "Dr. Mario",
          'price' => 699,
          'description' => "Dr. Mario is a 1990 action puzzle video game produced by Gunpei Yokoi and designed by ... The game's music, later re-used and arranged in games such as Super Smash Bros. Famitsu gives Super Mario Galaxy 38/40.",
          'ownerId' => 2,
          'image' => 'https://upload.wikimedia.org/wikipedia/en/f/f8/Dr._Mario_box_art.jpg'
        ]
    ]);
    }
}

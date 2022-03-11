<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nick Reynolds',
            'phone' => "555-555-5555",
			'email' => "nick.reynolds@domain.co",
			'bio' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ",
			'profile_picture' => "img/profile.jpeg",
        ]);

		DB::table('albums')->insert([
	    [
	      "title" => "Nandhaka Pieris",
	      "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
	      "cover_image" => "img/landscape1.jpeg",
	      "featured" => 1,
	      "user_id" => 1,
	      "created_at" => "2015-05-01",
	    ],
	    [
	      "title" => "New West Calgary",
	      "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
	      "cover_image" => "img/landscape2.jpeg",
	      "featured" => 0,
	      "user_id" => 1,
	      "created_at" => "2016-05-01",
	    ],
	    [
	      "title" => "Australian Landscape",
	      "description" =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
	      "cover_image" => "img/landscape3.jpeg",
	      "featured" => 0,
	      "user_id" => 1,
	      "created_at" => "2016-05-01",
	    ],
	    [
	      "title" => "Halvergate Marsh",
	      "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
	      "cover_image" => "img/landscape4.jpeg",
	      "featured" => 0,
	      "user_id" => 1,
	      "created_at" => "2014-04-01",
	    ],
	    [
	      "title" => "Rikkis Landscape",
	      "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
	      "cover_image" => "img/landscape5.jpeg",
	      "featured" => 1,
	      "user_id" => 1,
	      "created_at" => "2010-09-01",
	    ],
	    [
	      "title" => "Kiddi Kristjans Iceland",
	      "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
	      "cover_image" => "img/landscape6.jpeg",
	      "featured" => 1,
	      "user_id" => 1,
	      "created_at" => "2015-07-21",
	    ]
  ]);

    }
}



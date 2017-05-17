<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('user')->insert([
    		[
    				'Username' => 'FaishalIlham',
    				'Location' => 'Banten',
    				'Display_Picture' => 'default.jpg',
    				'Email' => 'faishal15@gmail.com',
    		],
    		[
    				'Username' => 'ArioBimo',
    				'Location' => 'Jakarta',
    				'Display_Picture' => 'default.jpg',
    				'Email' => 'ariobimo@gmail.com',
    		],
    		[
    				'Username' => 'DwikaSM',
    				'Location' => 'Surabaya',
    				'Display_Picture' => 'default.jpg',
    				'Email' => 'dwikasm@gmail.com',
    		],
    	]);
        //
    }
}

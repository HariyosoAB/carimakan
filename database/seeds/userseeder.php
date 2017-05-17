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
    				'Username' => 'faishal_ilham',
    				'Location' => 'Surabaya',
    				'Display_Picture' => 'default.jpg',
    				'Email' => 'faishal15@gmail.com',
    		],
    		[
    				'Username' => 'dwikasm',
    				'Location' => 'Surabaya',
    				'Display_Picture' => 'default.jpg',
    				'Email' => 'dwika@gmail.com',
    		],
    		[
    				'Username' => 'hariyosoab',
    				'Location' => 'Jakarta',
    				'Display_Picture' => 'default.jpg',
    				'Email' => 'masgondi@gmail.com',
    		],
    		[
    				'Username' => 'elvacious',
    				'Location' => 'Surabaya',
    				'Display_Picture' => 'default.jpg',
    				'Email' => 'elvalicious@gmail.com',
    		],
    	]);
        //
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class pictureseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('picture')->insert([
    		[
    				'Picture_Resto' => 3,
    				'Picture_Filename' => '1.jpg',
    		],
    		[
    				'Picture_Resto' => 3,
    				'Picture_Filename' => '2.jpg',
    		],
    		[
    				'Picture_Resto' => 4,
    				'Picture_Filename' => '8.jpg',
    		],
    		[
    				'Picture_Resto' => 5,
    				'Picture_Filename' => '3.jpg',
    		],
    		[
    				'Picture_Resto' => 5,
    				'Picture_Filename' => '4.jpg',
    		],
    		[
    				'Picture_Resto' => 5,
    				'Picture_Filename' => '5.jpg',
    		],
    		[
    				'Picture_Resto' => 6,
    				'Picture_Filename' => '6.jpg',
    		],
    		[
    				'Picture_Resto' => 7,
    				'Picture_Filename' => '7.jpg',
    		],

    	]);
    }
}

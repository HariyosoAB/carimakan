<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class loginseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('login')->insert([
    		[
    				'Login_User' => 'FaishalIlham',
    				'password' => '$2y$10$zO9V/U5pBeiuYieBpDTq/.ytptLrquo5q8doXQrF6vHZXo4W5ON86',
    				'remember_token' => 'nTXg0FGroCHfUXPSz8ZdR3zffh5i1YSJeDs5DdZp1OJSdGpzq9AiT4P6w2BF',
    				'created_at' => '2017-05-17 18:13:34',
    				'updated_at' => '2017-05-17 18:13:34',
    		],
    		[
    				'Login_User' => 'ArioBimo',
    				'password' => '$2y$10$WDWID.s8W4yB5nWqy7srYOiwT/H0wP0KGwfZFiNVcNSGxSOWT1oCO',
    				'remember_token' => 'SBv8FU50hrSr0EAdHbuwuRh4fgDfyBAqABHXHLa8KAh7wvchj3uj1thsPM7D',
    				'created_at' => '2017-05-17 18:14:36',
    				'updated_at' => '2017-05-17 18:14:36',
    		],
    		[
    				'Login_User' => 'DwikaSM',
    				'password' => '$2y$10$yw25gouVB/CHTebPzpO0hOOX9lYyYlrVxkU8.fVZCWbI36EJaXxGe',
    				'remember_token' => 'DZIrGMfLl4WyA4OYRpt1W22e5swHZNEpuOmhMTtfcmcyuLtsnsJvIqA2Y5Al',
    				'created_at' => '2017-05-17 18:15:06',
    				'updated_at' => '2017-05-17 18:14:36',
    		],
    	]);
    }
}

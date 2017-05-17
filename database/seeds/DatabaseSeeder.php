<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userseeder::class);
        $this->call(restoseeder::class);
        $this->call(loginseeder::class);
        $this->call(pictureseeder::class);
        $this->call(reviewsseeder::class);
    }
}

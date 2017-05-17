<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class reviewsseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
        	[
        	'Reviews_Author'=>'DwikaSM', 
        	'Reviews_Resto'=>1, 
        	'Reviews_Description'=>'Bebeknya mantep banget. lokasi deket surabaya pusat. harganya oke', 
        	'Reviews_Price'=>3, 
        	'Reviews_Place'=>4, 
        	'Reviews_Service'=>3, 
        	'Reviews_Food'=>4, 
        	'Reviews_Time'=>'2017-05-17 14:01:34'
        	],
        	[
        	'Reviews_Author'=>'ArioBimo', 
        	'Reviews_Resto'=>1, 
        	'Reviews_Description'=>'Menu palik enak yang bebek keju. recommended.', 
        	'Reviews_Price'=>4, 
        	'Reviews_Place'=>3, 
        	'Reviews_Service'=>3, 
        	'Reviews_Food'=>5, 
        	'Reviews_Time'=>'2017-05-17 13:22:14'
        	],
        	[
        	'Reviews_Author'=>'FaishalIlham', 
        	'Reviews_Resto'=>2, 
        	'Reviews_Description'=>'Cocok buat acara kumpul-kumpul keluarga, arisan ibu". harganya oke', 
        	'Reviews_Price'=>5, 
        	'Reviews_Place'=>4, 
        	'Reviews_Service'=>4, 
        	'Reviews_Food'=>5, 
        	'Reviews_Time'=>'2017-05-17 04:00:00'
        	],
        	[
        	'Reviews_Author'=>'DwikaSM', 
        	'Reviews_Resto'=>2, 
        	'Reviews_Description'=>'Tempatnya oke. Klasik banget', 
        	'Reviews_Price'=>4, 
        	'Reviews_Place'=>5, 
        	'Reviews_Service'=>4, 
        	'Reviews_Food'=>4, 
        	'Reviews_Time'=>'2017-05-17 08:00:00'
        	],
        	[
        	'Reviews_Author'=>'FaishalIlham', 
        	'Reviews_Resto'=>3, 
        	'Reviews_Description'=>'Ayam bakarnya enak pol. cocok buat ngajakin keluarga doi :)', 
        	'Reviews_Price'=>4, 
        	'Reviews_Place'=>4, 
        	'Reviews_Service'=>5, 
        	'Reviews_Food'=>5, 
        	'Reviews_Time'=>'2017-05-17 09:00:00'
        	],
        	[
        	'Reviews_Author'=>'ArioBimo', 
        	'Reviews_Resto'=>2, 
        	'Reviews_Description'=>'harga Makananya ga pas dikantong', 
        	'Reviews_Price'=>3, 
        	'Reviews_Place'=>4, 
        	'Reviews_Service'=>3, 
        	'Reviews_Food'=>5, 
        	'Reviews_Time'=>'2017-05-18 10:00:00'
        	],
        	[
        	'Reviews_Author'=>'DwikaSM', 
        	'Reviews_Resto'=>4, 
        	'Reviews_Description'=>'Makananya lucu. unik. tempatnya instagramable', 
        	'Reviews_Price'=>5, 
        	'Reviews_Place'=>5, 
        	'Reviews_Service'=>3, 
        	'Reviews_Food'=>5, 
        	'Reviews_Time'=>'2017-05-01 09:00:00'
        	],
        	[
        	'Reviews_Author'=>'FaishalIlham', 
        	'Reviews_Resto'=>6, 
        	'Reviews_Description'=>'Mienya pedesnya gilak, lo harus nyoba yang level 5 parah', 
        	'Reviews_Price'=>4, 
        	'Reviews_Place'=>3, 
        	'Reviews_Service'=>3, 
        	'Reviews_Food'=>5, 
        	'Reviews_Time'=>'2017-05-17 14:18:31'
        	],
        	[
        	'Reviews_Author'=>'ArioBimo', 
        	'Reviews_Resto'=>9, 
        	'Reviews_Description'=>'Pilihan daginya banyak banget. cocok pas cuaca lagi mendung dan ujan', 
        	'Reviews_Price'=>4, 
        	'Reviews_Place'=>3, 
        	'Reviews_Service'=>4, 
        	'Reviews_Food'=>5, 
        	'Reviews_Time'=>'2017-05-03 10:00:00'
        	],
        	[
        	'Reviews_Author'=>'FaishalIlham', 
        	'Reviews_Resto'=>9, 
        	'Reviews_Description'=>'Sopnya enak', 
        	'Reviews_Price'=>4, 
        	'Reviews_Place'=>4, 
        	'Reviews_Service'=>4, 
        	'Reviews_Food'=>5, 
        	'Reviews_Time'=>'2017-05-05 07:00:00'
        	],
    	]);
    }
}

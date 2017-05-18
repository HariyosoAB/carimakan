<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\User;
use App\UserModel;
use Response;
use DB, Redirect, Validator, View, Auth;
use File;
use Log;
class restoController extends Controller
{
    public function getFeatured(){
      $data['featured'] = DB::select("select DISTINCT * from (SELECT min(ID_Picture) as id_pic,Picture_Resto FROM picture GROUP BY Picture_Resto ) as pic, (SELECT Picture_Filename, ID_Picture from picture) as pct ,resto, (select Reviews_Resto, avg(Reviews_Food) as average_food,AVG(Reviews_Price) as average_price, AVG(Reviews_Place) as average_place , AVG(Reviews_Service) as average_service from reviews GROUP by reviews_resto) AS rev where pic.id_pic = pct.ID_Picture and pic.Picture_Resto = resto.ID_Resto and rev.Reviews_Resto = resto.ID_Resto ORDER by rev.average_service desc, rev.average_price desc, rev.average_place desc, rev.average_food desc limit 5");

      return Response::json($data);
    }
    public function getMood($city){
      $BASE_URL = "http://query.yahooapis.com/v1/public/yql";
      $yql_query = 'select item.condition from weather.forecast where woeid in (select woeid from geo.places(1) where text="'.$city.'")';
      $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json";
      $session = curl_init($yql_query_url);
       curl_setopt($session, CURLOPT_RETURNTRANSFER,true);

      $json = curl_exec($session);

       $phpObj =  json_decode($json);

       $data['weather'] = $phpObj->query->results->channel->item->condition;
       if (
         $data['weather']->code == "20" ||
         $data['weather']->code == "21" ||
         $data['weather']->code == "22" ||
         $data['weather']->code == "23" ||
         $data['weather']->code == "30" ||
         $data['weather']->code == "31" ||
         $data['weather']->code == "32" ||
         $data['weather']->code == "33" ||
         $data['weather']->code == "34" ||
         $data['weather']->code == "36" ||
         $data['weather']->code == "44") {
           $type = 2;
       }
       else {
         $type =1;
       }
       $data['type'] = $type;
       $data['query'] = DB::select("select DISTINCT * from (SELECT min(ID_Picture) as id_pic,Picture_Resto FROM picture GROUP BY Picture_Resto ) as pic, (SELECT Picture_Filename, ID_Picture from picture) as pct ,resto where pic.id_pic = pct.ID_Picture and pic.Picture_Resto = resto.ID_Resto and (type = ".$type." or type = 3) and resto.Resto_City='".$city."' Order by type limit 7
");
      return Response::json($data);
    }

    public function getDetails($id){
      $data['resto'] = DB::select("select * from resto where ID_Resto='".$id."'");
      $data['pictures'] = DB::select("select * from picture where Picture_Resto='".$id."'");
      $data['reviews'] = DB::select("select * from reviews , (select Display_Picture as dp, Username as un , Location as loc from user) as profpict , (select Reviews_Author ra, count(*) as banyak from reviews group by Reviews_Author) as manyc where Reviews_Resto='".$id."' and profpict.un = reviews.Reviews_Author and manyc.ra=reviews.Reviews_Author");
      return Response::json($data);
    }

}

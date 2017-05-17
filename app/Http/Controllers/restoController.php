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
    public function ApiCall(Request $request){
      $BASE_URL = "http://query.yahooapis.com/v1/public/yql";
      $yql_query = 'select item.condition from weather.forecast where woeid in (select woeid from geo.places(1) where text="Irian Jaya")';
      $yql_query_url = $BASE_URL . "?q=" . urlencode($yql_query) . "&format=json";
      // Make call with cURL
      $session = curl_init($yql_query_url);
      curl_setopt($session, CURLOPT_RETURNTRANSFER,true);
      $json = curl_exec($session);
      // Convert JSON to PHP object
       $phpObj =  json_decode($json);
       var_dump($phpObj);
       $tes = $phpObj->query->results->channel->item->condition;
       dd($tes);
    }
}

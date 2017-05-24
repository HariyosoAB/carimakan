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
    public function search($name){
      $data['query'] = DB::select("select * from resto, (select min(ID_Picture) as ID_Picture,Picture_Resto from picture group by Picture_Resto) as pic, (select Picture_Filename ,ID_Picture from picture) as pct where  pic.Picture_Resto = resto.ID_Resto and pic.ID_Picture = pct.ID_Picture and Resto_Name like '%".$name."%'");
      return Response::json($data);
    }
    public function getFeatured(){
      $data['featured'] = DB::select("select DISTINCT * from (SELECT min(ID_Picture) as id_pic,Picture_Resto FROM picture GROUP BY Picture_Resto ) as pic, (SELECT Picture_Filename, ID_Picture from picture) as pct ,resto, (select Reviews_Resto, avg(Reviews_Food) as average_food,AVG(Reviews_Price) as average_price, AVG(Reviews_Place) as average_place , AVG(Reviews_Service) as average_service from reviews GROUP by reviews_resto) AS rev , (select reve.Reviews_resto as a , AVG((reve.average_food+reve.average_price+reve.average_place+reve.average_service)/4) as average from (select Reviews_Resto, avg(Reviews_Food) as average_food, AVG(Reviews_Price) as average_price, AVG(Reviews_Place) as average_place , AVG(Reviews_Service) as average_service from reviews GROUP by reviews_resto) as reve GROUP by reve.Reviews_Resto) as rav where pic.id_pic = pct.ID_Picture and pic.Picture_Resto = resto.ID_Resto and rev.Reviews_Resto = resto.ID_Resto and rav.a = rev.Reviews_Resto order by rav.average desc limit 5");

      return Response::json($data);
    }
    public function getSuggested($id){
      $rest = DB::select("select * from resto where ID_Resto = '".$id."'");
      $data['featured'] = DB::select("select * from resto , (select min(ID_Picture) as ID_Picture,Picture_Resto from picture group by Picture_Resto) as pic, (select Picture_Filename ,ID_Picture from picture) as pct where Type = '".$rest[0]->Type."' and Resto_City = '".$rest[0]->Resto_City."' and pic.Picture_Resto = resto.ID_Resto and pic.ID_Picture = pct.ID_Picture");
    //  dd($data);
      return Response::json($data);

    }
    public function getPopular(){
      $data['query'] = DB::select("select * from (select Reviews_Resto as rr,count(*)as banyak from reviews group by Reviews_Resto) as pop, resto ,(select min(ID_Picture) as ID_Picture,Picture_Resto from picture group by Picture_Resto) as pic, (select Picture_Filename ,ID_Picture from picture) as pct where pic.Picture_Resto = resto.ID_Resto and pic.ID_Picture = pct.ID_Picture and resto.ID_Resto= pop.rr order by pop.banyak desc");
      return Response::json($data);
    }
    public function getVibes(){
      $data['query'] = DB::select("select * from resto ,(select Reviews_Resto,avg(Reviews_Place) as Reviews_Place from reviews group by Reviews_Resto) as place, (select min(ID_Picture) as ID_Picture,Picture_Resto from picture group by Picture_Resto) as pic, (select Picture_Filename ,ID_Picture from picture) as pct where place.Reviews_Resto = resto.ID_Resto and pic.Picture_Resto = resto.ID_Resto and pic.ID_Picture = pct.ID_Picture order by place.Reviews_Place desc");
      //dd($data);
      return Response::json($data);
    }
    public function getPrice(){
      $data['query'] = DB::select("select * from resto , (select min(ID_Picture) as ID_Picture,Picture_Resto from picture group by Picture_Resto) as pic, (select Picture_Filename ,ID_Picture from picture) as pct where pic.Picture_Resto = resto.ID_Resto and pic.ID_Picture = pct.ID_Picture order by resto.Price_Max asc");
      //dd($data);
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

    public function getEmpty(){
      $data['norev'] = DB::select("select * from resto, (select min(ID_Picture) as ID_Picture,Picture_Resto from picture group by Picture_Resto) as pic, (select Picture_Filename ,ID_Picture from picture) as pct where pic.ID_Picture = pct.ID_Picture and pic.Picture_Resto = resto.ID_Resto and ID_Resto not in (select Reviews_Resto from reviews )");
      return Response::json($data);
    }
    public function getDetails($id){
      $data['resto'] = DB::select("select * from resto where ID_Resto='".$id."'");
      $data['pictures'] = DB::select("select * from picture where Picture_Resto='".$id."'");
      $data['reviews'] = DB::select("select * from reviews , (select Display_Picture as dp, Username as un , Location as loc from user) as profpict , (select Reviews_Author ra, count(*) as banyak from reviews group by Reviews_Author) as manyc where Reviews_Resto='".$id."' and profpict.un = reviews.Reviews_Author and manyc.ra=reviews.Reviews_Author");
      $tes = DB::select("select Reviews_Resto, avg(Reviews_Food) as averageFood, avg(Reviews_Place) as averagePlace,avg(Reviews_Price) as averagePrice,avg(Reviews_Service) as averageService from reviews WHERE Reviews_Resto = '".$id."' group by Reviews_Resto");
      if(NULL != $tes){
          $data['avg']['overall'] = ($tes[0]->averageFood + $tes[0]->averagePlace + $tes[0]->averagePrice + $tes[0]->averageService)/4;
          $data['avg']['overall']= round( $data['avg']['overall'], 2, PHP_ROUND_HALF_UP);
          $data['avg']['food'] = $tes[0]->averageFood;
          $data['avg']['place'] = $tes[0]->averagePlace;
          $data['avg']['price'] = $tes[0]->averagePrice;
          $data['avg']['service'] = $tes[0]->averageService;
        }
        else{
              $data['avg']['overall']=0;
              $data['avg']['food'] = 0;
              $data['avg']['place'] = 0;
              $data['avg']['price'] =0;
              $data['avg']['service'] = 0;
        }

      return Response::json($data);
    }
    public function submitReview(Request $request){
        DB::table('reviews')->insert([
          ['Reviews_Resto'=>$request->ID_Resto,'Reviews_Author' => $request->Author,'Reviews_Description'=> $request->text, 'Reviews_Food' => $request->rate,'Reviews_Service' => $request->rate2,'Reviews_Price' => $request->rate3,'Reviews_Place' => $request->rate4]
        ]);

    }

    public function getAll(){
        $data['query'] = DB::select("select * from resto,  (SELECT min(ID_Picture) as id_pic,Picture_Resto FROM picture GROUP BY Picture_Resto ) as pic, (SELECT Picture_Filename, ID_Picture from picture) as pct where pic.id_pic = pct.ID_Picture and pic.Picture_Resto = resto.ID_Resto");
        return Response::json($data);

    }


}

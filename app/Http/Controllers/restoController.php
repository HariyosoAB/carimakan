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
}

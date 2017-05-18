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


class UserController extends Controller
{
   public function register(Request $request){
     echo "<script>console.log('ss')</script>";
     $request->password = bcrypt($request->password);
     $regis = new UserModel;
     $regis->Username = $request->username;
     $regis->Email = $request->email;
     $regis->Location = $request->location;
     $regis->Display_Picture = 'default.jpg';
     $regis->save();

     $tes = new User;
     $tes->Login_User = $request->username;
     $tes->password = $request->password;
     $tes->save();

   }
   public function login(Request $request){
     if(Auth::attempt(['Login_User' => $request->username, 'password' => $request->password]))
       {

       }
       else
       {
          log-err;
       }
   }
   public function logdata(){
     if(Auth::check()){
       $id = Auth::user()->Login_User;
       $data['userdet']=UserModel::find($id);
       $data['user'] = Auth::user();

       return Response::json($data);
     }
     else {
       return null;
     }


   }
   public function logout(){
     Auth::logout();
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
      dd($tes['text']);
   }
}

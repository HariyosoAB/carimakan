<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\login;
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

     $tes = new login;
     $tes->Login_User = $request->username;
     $tes->Password = $request->password;
     $tes->save();

   }
}

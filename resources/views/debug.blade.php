<form ng-submit="submitSignUp()" method="post" class="proximaLight" action="{{url('/')}}/api/signup">
 <div class="form-group" style="margin:10px 0px;"><label class="pull-left">Username :</label><input type="text" name="username" ng-model="userData.username"class="form-control" required></input></div>
 <div class="form-group" style="margin:10px 0px;"><label class="pull-left">Password :</label><input type="password" name="password" ng-model="userData.password" class="form-control" required></input></div>
 <input type="hidden" name="_token" value="{{csrf_token()}}">
   <div class="form-group" style="margin:10px 0px;">
     <label class="pull-left">Location :</label>
     <select type="text" name="location" class="form-control" ng-model="userData.location" required>
     <option value="-"></option>
     <option value="Banten">Banten</option>
     <option value="Jakarta">Jakarta</option>
     <option value="JawaBarat">Jawa Barat</option>
     <option value="JawaTimur">Jawa Timur</option>
     <option value="DIY">DIY</option>
     <option value="JawaTengah">Jawa Tengah</option>
     <option value="Other">Other</option>
   </select>
  </div>
 <div class="form-group" style="margin:10px 0px;"><label class="pull-left">Email :</label><input type="email" name="email" class="form-control" ng-model="userData.email" required></input></div>
 <div class="form-group" style="margin:10px 0px;"><label for="exampleInputFile" class="pull-left">Display Picture : </label><input type="file" name="avatar" ng-model="aa"></div>
 <button type="submit" name="button">ee</button>
 </form>

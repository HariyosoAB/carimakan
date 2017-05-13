var mainctrl = angular.module('mainCtrl',['userService']);

mainctrl.controller('mainController',['$scope','$location','$anchorScroll','swal','Users',function($scope,$location,$anchorScroll,swal,Users){
  $anchorScroll();
  $scope.loading = true;
  $scope.pageClass ="";
  $scope.userData={};

  $scope.signUp = function(){
    swal({
      title: 'Sign Up',
      html: '<form ng-submit="submitSignUp()" method="post" class="proximaLight">'+
       '<div class="form-group" style="margin:10px 0px;"><label class="pull-left">Username :</label><input type="text" name="sgusernm" ng-model="userData.username"class="form-control" required></input></div> '+
       '<div class="form-group" style="margin:10px 0px;"><label class="pull-left">Password :</label><input type="password" name="sgpasswd" ng-model="userData.password" class="form-control" required></input></div>'+
       '<div class="form-group" style="margin:10px 0px;"><label class="pull-left">Location :</label><select type="text" name="loc" class="form-control" ng-model="userData.location" required><option value="-"></option><option value="Banten">Banten</option><option value="Jakarta">Jakarta</option><option value="JawaBarat">Jawa Barat</option><option value="JawaTimur">Jawa Timur</option><option value="DIY">DIY</option><option value="JawaTengah">Jawa Tengah</option><option value="Other">Other</option></select></div>'+
       '<div class="form-group" style="margin:10px 0px;"><label class="pull-left">Email :</label><input type="email" name="Email" class="form-control" ng-model="userData.email" required></input></div>'+
       '<div class="form-group" style="margin:10px 0px;"><label for="exampleInputFile" class="pull-left">Display Picture : </label><input type="file" name="avatar" ng-model="userData.username"></div>'+
       '</form>',
       showCloseButton: true,
       showCancelButton: true,
       confirmButtonText:
         '<i class="fa fa-thumbs-up"></i> Sign Up',
       cancelButtonText:
         '<i class="fa fa-thumbs-down"></i> Cancel'
    }).then(
      function(isConfirm){
        Users.save($scope.userData).then(function(){
                  swal(
                'Register Success',
                'You have created an account',
                'success'
            );
        },function(){
                    swal(
                  'Oops...',
                  'Something went wrong!',
                  'error'
              );
        });
      });
  };


}]);


mainctrl.controller('listController',['$scope','$location','$anchorScroll',function($scope,$location,$anchorScroll){
  $anchorScroll();

  $scope.loading = true;
  $scope.pageClass = "list";
  $scope.page1 = true;
  $scope.page2 = false;
  $scope.loading= false;
  $scope.pindahPage = function(){
    console.log("tes");
    $scope.page2 = !$scope.page2;
    $scope.page1 = !$scope.page1;

  };
  $scope.search = function(){
    $scope.loading = true;
    setTimeout(function(){
      $scope.loading = false;
      $scope.$apply();
    },1000);

  };
  $scope.keydown = function(e){
    if(event.keyCode == 39 )
    {
      $scope.page2 = true;
      $scope.page1 = false;
    }
    else if(event.keyCode == 37)
    {
      $scope.page2 = false;
      $scope.page1 = true;
    }

  };



}]);

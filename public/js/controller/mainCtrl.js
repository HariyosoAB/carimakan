var mainctrl = angular.module('mainCtrl',['userService','queryService']);

mainctrl.controller('sidebarController',['$scope','swal','$location','Users',function($scope,swal,$location,Users){
  $scope.closed={};
  $scope.closed.sidebar = true;
  $scope.Auth = {};
  $scope.Auth.data =null;

  $scope.signUp = function(){
    swal({
      title: 'Sign Up',
      html: '<form ng-submit="submitSignUp()" method="post" class="proximaLight">'+
       '<div class="form-group" style="margin:10px 0px;"><label class="pull-left">Username :</label><input id="usrnm" type="text" name="sgusernm" ng-model="userData.username"class="form-control" required></input></div> '+
       '<div class="form-group" style="margin:10px 0px;"><label class="pull-left">Password :</label><input id="pass" type="password" name="sgpasswd" ng-model="userData.password" class="form-control" required></input></div>'+
       '<div class="form-group" style="margin:10px 0px;"><label class="pull-left">Location :</label><select id="location" type="text" name="loc" class="form-control" ng-model="userData.location" required><option value="-"></option><option value="Banten">Banten</option><option value="Jakarta">Jakarta</option><option value="Bandung">Bandung</option><option value="Surabaya">Surabaya</option><option value="DIY">DIY</option><option value="Semarang">Semarang</option></select></div>'+
       '<div class="form-group" style="margin:10px 0px;"><label class="pull-left">Email :</label><input id="email" type="email" name="Email" class="form-control" ng-model="userData.email" required></input></div>'+
       '</form>',
       showCloseButton: true,
       showCancelButton: true,
       confirmButtonText:
         '<i class="fa fa-thumbs-up"></i> Sign Up',
       cancelButtonText:
         '<i class="fa fa-thumbs-down"></i> Cancel'
    }).then(
      function(isConfirm){
        var username = document.getElementById("usrnm").value;
        var password = document.getElementById("pass").value;
        var email = document.getElementById("email").value;
        var location = document.getElementById("location").value;

        $scope.userData = {'username':username,'password':password,'email':email,'location':location};
        console.log($scope.userData);
        Users.save($scope.userData).then(function(){
                  swal(
                'Register Success',
                'You have created an account',
                'success'
            ).then(function(){
                Users.login($scope.userData);
                $location.url('/categories');
            });
        },function(){
                    swal(
                  'Oops...',
                  'Username is Already Taken',
                  'error'
              );
        });
      });
  };






  $scope.toggleSidebar = function(){
    $scope.closed.sidebar= !$scope.closed.sidebar;
  }
  $scope.logout = function(){
    Users.logOut().then(function(){
      swal(
          'Logged Out',
          'You have logged out',
          'info'
      );
      $scope.Auth.data = null;
      $location.url('/');

    });
  }

}]);


mainctrl.controller('mainController',['$scope','$location','$anchorScroll','swal','Users',function($scope,$location,$anchorScroll,swal,Users){
  $scope.closed.sidebar = true;
  $anchorScroll();
  $scope.loading = true;
  $scope.userData={};
  $scope.loginData={};

  Users.logData().then(function(data){
    console.log(data);

    if(data != null && data!= undefined){
      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
    }
    else {
      console.log("null");
    }
  });

  $scope.submitLogin= function(){
    Users.login($scope.loginData).then(function(){
          swal(
        'Login Success',
        'You successfully logged in',
        'success');
        $location.url('/categories');
    },function(){
      swal(
    'Login failed',
    'Username or Password did not match any records',
    'error');
    });
  };

}]);

mainctrl.controller('categoriesController',['$scope','$location','$anchorScroll','swal','Users','Query',function($scope,$location,$anchorScroll,swal,Users,Query){
  $scope.closed.sidebar = true;
  $anchorScroll();
  $scope.loading = true;
  $scope.userData={};
  $scope.loginData={};
  Users.logData().then(function(data){
    console.log(data);

    if(data != null && data!= undefined){
      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
    }
    else {
      console.log("null");
    }
  });
  Query.getFeatured().then(function(data){
    console.log(data.data.featured);

    if(data != null && data!= undefined){
      $scope.featuredData = data.data.featured;
      for (i = 0; i < $scope.featuredData.length; i++) {
          $scope.featuredData[i].rating = (parseFloat($scope.featuredData[i].average_food) + parseFloat($scope.featuredData[i].average_price) + parseFloat($scope.featuredData[i].average_place) + parseFloat($scope.featuredData[i].average_service))/4;
          console.log($scope.featuredData[i].rating)

      }
    }
    else {
      console.log("null");
    }
  });



}]);


mainctrl.controller('listController',['$scope','$location','$anchorScroll','Users',function($scope,$location,$anchorScroll,Users){
  $anchorScroll();

  Users.logData().then(function(data){
    console.log(data);

    if(data != null && data!= undefined){
      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
    }
    else {
      console.log("null");
    }
  });

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

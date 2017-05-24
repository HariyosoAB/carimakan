var mainctrl = angular.module('mainCtrl',['userService','queryService']);




mainctrl.controller('searchController',['$scope','swal','$location','Users','Query',function($scope,swal,$location,Users,Query){
  $scope.loading= true;
    Query.getSearch($scope.search.searchname).then(function(searched){
    $scope.resto = searched.data.query;
    $scope.loading= false;
  });
}]);



mainctrl.controller('sidebarController',['$scope','swal','$location','Users','Query',function($scope,swal,$location,Users,Query){
  $scope.closed={};
  $scope.closed.sidebar = true;
  $scope.Auth = {};
  $scope.Auth.data =null;
  $scope.search = function(){
    $location.url('/search');
  }
  $scope.searchData = {};
  $scope.searchit = function(){
    Query.find($scope.searchData).then(function(){
        
    },function(){

          );
    });
  }
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




mainctrl.controller('popularController',['$scope','swal','$anchorScroll','$location','Users','Query',function($scope,swal,$anchorScroll,$location,Users,Query){
    $scope.closed.sidebar = true;
    $anchorScroll();
    $scope.loading = true;

    Users.logData().then(function(data){

      if(data != null && data!= undefined){
        $scope.Auth.data = data.data.user.Login_User;
        $scope.Auth.picture = data.data.userdet.Display_Picture;
      }
      else {
        console.log("null");
      }
    });

    Query.getPopular().then(function(searched){
    $scope.resto = searched.data.query;
    $scope.loading= false;
  });
  }]);


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
mainctrl.controller('popularController',['$scope','swal','$anchorScroll','$location','Users','Query',function($scope,swal,$anchorScroll,$location,Users,Query){
  $scope.closed.sidebar = true;
  $anchorScroll();
  $scope.loading = true;

  Users.logData().then(function(data){

    if(data != null && data!= undefined){
      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
    }
    else {
      console.log("null");
    }
  });

  Query.getPopular().then(function(searched){
    $scope.resto = searched.data.query;
    $scope.loading= false;
    console.log(searched.data.query);

    },function(){
      console.log("ss");
    });
    Query.getEmpty().then(function(searched){
        $scope.empty = searched.data.norev;
        $scope.loading= false;
        console.log($scope.resto);

        },function(){
          console.log("ss");
        });
}]);



mainctrl.controller('allController',['$scope','swal','$anchorScroll','$location','Users','Query',function($scope,swal,$anchorScroll,$location,Users,Query){
  $scope.closed.sidebar = true;
  $anchorScroll();
  $scope.loading = true;

  Users.logData().then(function(data){

    if(data != null && data!= undefined){
      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
    }
    else {
      console.log("null");
    }
  });
  Query.getAlle().then(function(searched){
    $scope.resto = searched.data.query;
    $scope.loading= false;
    console.log($scope.resto);


    },function(){
      console.log("ss");
    });



}]);

mainctrl.controller('mainController',['$scope','$location','$anchorScroll','swal','Users',function($scope,$location,$anchorScroll,swal,Users){
  $scope.closed.sidebar = true;
  $anchorScroll();
  $scope.loading = true;
  $scope.loginData={};
  $scope.mood = false;

  Users.logData().then(function(data){

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
  $scope.loginData={};
  Users.logData().then(function(data){

    if(data != null && data!= undefined){
      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
    }
    else {
      console.log("null");
    }
  });
  Query.getFeatured().then(function(data){

    if(data != null && data!= undefined){
      $scope.featuredData = data.data.featured;
      for (i = 0; i < $scope.featuredData.length; i++) {
          $scope.featuredData[i].rating = (parseFloat($scope.featuredData[i].average_food) + parseFloat($scope.featuredData[i].average_price) + parseFloat($scope.featuredData[i].average_place) + parseFloat($scope.featuredData[i].average_service))/4;
          $scope.featuredData[i].rating  = Math.round($scope.featuredData[i].rating*100)/100;

      }
    }
    else {
      console.log("null");
    }
  });


}]);



mainctrl.controller('moodController',['$scope','$location','$anchorScroll','swal','Users','Query',function($scope,$location,$anchorScroll,swal,Users,Query){
  $scope.closed.sidebar = true;
  $anchorScroll();
  $scope.sess={};
  $scope.mood = true;
  $scope.loading =true;
  var cit;
  Users.logData().then(function(data){

    if(data != null && data!= undefined){

      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
      $scope.sess.city = data.data.userdet.Location;
      cit = $scope.sess.city;

      Query.getMood(cit).then(function(getMood){
        console.log(getMood);
        $scope.resto = getMood.data.query;
        $scope.weather = getMood.data.weather;
        if (getMood.data.type==1) {
          $scope.type = "rainy.gif"
        }
        else {
          $scope.type = "sunny.gif"
        }
        $scope.loading=false;
      },function(){

      });

    }
    else {
      console.log("null");
    }
  });

}]);


mainctrl.controller('vibesController',['$scope','$location','$anchorScroll','swal','Users','Query',function($scope,$location,$anchorScroll,swal,Users,Query){
  $scope.closed.sidebar = true;
  $anchorScroll();
  $scope.loading = true;

  Users.logData().then(function(data){

    if(data != null && data!= undefined){
      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
    }
    else {
      console.log("null");
    }
  });


  Query.getVibes().then(function(searched){
    $scope.resto = searched.data.query;
    $scope.loading= false;
    console.log($scope.resto);
    for (i = 0; i < $scope.resto.length; i++) {
      console.log( $scope.resto[i]);
        $scope.resto[i].Reviews_Place  = Math.round($scope.resto[i].Reviews_Place*100)/100;
    }

    },function(){
      console.log("ss");
    });
  Query.getEmpty().then(function(searched){
      $scope.empty = searched.data.norev;
      $scope.loading= false;
      console.log($scope.resto);

      },function(){
        console.log("ss");
      });
}]);


mainctrl.controller('priceController',['$scope','$location','$anchorScroll','swal','Users','Query',function($scope,$location,$anchorScroll,swal,Users,Query){
  $scope.closed.sidebar = true;
  $anchorScroll();
  $scope.loading = true;

  Users.logData().then(function(data){

    if(data != null && data!= undefined){
      $scope.Auth.data = data.data.user.Login_User;
      $scope.Auth.picture = data.data.userdet.Display_Picture;
    }
    else {
      console.log("null");
    }
  });


  Query.getPrice().then(function(searched){
    $scope.resto = searched.data.query;
    $scope.loading= false;
    console.log($scope.resto);
    $scope.price= true;
    },function(){
      console.log("ss");
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

mainctrl.controller('detailController',['$scope','$location','$anchorScroll','swal','Users','Query','$routeParams',function($scope,$location,$anchorScroll,swal,Users,Query,$routeParams){
    $scope.restoID = $routeParams.id;
    $scope.closed.sidebar = true;
    $anchorScroll();
    $scope.loading = true;
    $scope.commload= false;

    var a;
    Users.logData().then(function(data){

      if(data != null && data!= undefined){
        $scope.Auth.data = data.data.user.Login_User;
        $scope.Auth.picture = data.data.userdet.Display_Picture;
        a = $scope.Auth.data;
      }
      else {
        console.log("null");
      }
    });

    Query.getSuggested($scope.restoID).then(function(data){

      if(data != null && data!= undefined){
        $scope.featuredData = data.data.featured;
        for (i = 0; i < $scope.featuredData.length; i++) {
            $scope.featuredData[i].rating = (parseFloat($scope.featuredData[i].average_food) + parseFloat($scope.featuredData[i].average_price) + parseFloat($scope.featuredData[i].average_place) + parseFloat($scope.featuredData[i].average_service))/4;
            $scope.featuredData[i].rating  = Math.round($scope.featuredData[i].rating*100)/100;

        }
      }
      else {
        console.log("null");
      }
    });



    Query.getDetails($scope.restoID).then(function(detailsData){
        $scope.info = detailsData.data.resto;
        $scope.reviews = detailsData.data.reviews;
        $scope.pictures = detailsData.data.pictures;
        $scope.avg = detailsData.data.avg;

        console.log($scope.avg);
        for (i = 0; i < $scope.reviews.length; i++) {
            $scope.reviews[i].rating = (parseFloat(detailsData.data.reviews[i].Reviews_Price) + parseFloat(detailsData.data.reviews[i].Reviews_Food) + parseFloat(detailsData.data.reviews[i].Reviews_Place)  +parseFloat(detailsData.data.reviews[i].Reviews_Service) )/4;
        }


        $scope.loading = false;
    });

      $scope.submitComment= function(){
         if ($scope.commentData.rate == null || $scope.commentData.rate2 == null || $scope.commentData.rate3 == null ||$scope.commentData.rate4 == null ||$scope.commentData.text == null) {
               swal(
             'Review Failed',
             'Please input ratings',
             'error')
         }
         else {
            $scope.commentData.ID_Resto =  $scope.restoID;
            $scope.commentData.Author = a;
            Query.submitComment($scope.commentData).then(function(){
                $scope.commload= true;
                Query.getDetails($scope.restoID).then(function(detailsData){
                    $scope.info = detailsData.data.resto;
                    $scope.reviews = detailsData.data.reviews;
                    $scope.pictures = detailsData.data.pictures;
                    $scope.avg = detailsData.data.avg;

                    console.log($scope.avg);
                    for (i = 0; i < $scope.reviews.length; i++) {
                        $scope.reviews[i].rating = (parseFloat(detailsData.data.reviews[i].Reviews_Price) + parseFloat(detailsData.data.reviews[i].Reviews_Food) + parseFloat(detailsData.data.reviews[i].Reviews_Place)  +parseFloat(detailsData.data.reviews[i].Reviews_Service) )/4;
                    }
                    $scope.commentData= {};
                    $scope.commentform.$setPristine();
                    $scope.commload = false;
                });
            });
         }
      }




}]);

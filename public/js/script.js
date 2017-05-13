var carimakan = angular.module('carimakanApp',['mainCtrl','ngRoute','ngAnimate','ngTouch','angular-carousel','ui.bootstrap','angular-sweetalert']);


carimakan.config(function($routeProvider){
  $routeProvider
  .when('/',{
    templateUrl : 'views/home.php',
    controller: 'mainController'
  })
  .when('/categories',{
    templateUrl : 'views/pageAwal.php',
    controller: 'mainController'
  })
  .when('/lists',{
    templateUrl : 'views/lists.php',
    controller: 'listController'
  })
  .when('/resto',{
    templateUrl : 'views/restaurant.php',
    controller: 'listController'
  })
  .when('/popular',{
    templateUrl : 'views/popular.php',
    controller: 'listController'
  })
  .when('/price',{
    templateUrl : 'views/price.php',
    controller: 'listController'
  });
});

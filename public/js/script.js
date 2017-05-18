var carimakan = angular.module('carimakanApp',['mainCtrl','ngRoute','ngAnimate','ngTouch','angular-carousel','ui.bootstrap','angular-sweetalert']);


carimakan.config(['$qProvider', function ($qProvider) {
    $qProvider.errorOnUnhandledRejections(false);
}]);
carimakan.config(function($routeProvider){
  $routeProvider
  .when('/',{
    templateUrl : 'views/home.php',
    controller: 'mainController'
  })
  .when('/categories',{
    templateUrl : 'views/pageAwal.php',
    controller: 'categoriesController'
  })
  .when('/lists',{
    templateUrl : 'views/lists.php',
    controller: 'moodController'
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
  })
  .when('/details/:id',{
    templateUrl : 'views/restaurant.php',
    controller: 'detailController'
  });
});

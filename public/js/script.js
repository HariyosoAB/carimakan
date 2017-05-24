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
    templateUrl : 'views/lists.php',
    controller: 'popularController'
  })
  .when('/vibes',{
    templateUrl : 'views/lists.php',
    controller: 'vibesController'
  })
  .when('/all',{
    templateUrl : 'views/lists.php',
    controller: 'allController'
  })
  .when('/price',{
    templateUrl : 'views/lists.php',
    controller: 'priceController'
  })
  .when('/details/:id',{
    templateUrl : 'views/restaurant.php',
    controller: 'detailController'
  })
  .when('/search',{
    templateUrl : 'views/lists.php',
    controller: 'searchController'
  });
});

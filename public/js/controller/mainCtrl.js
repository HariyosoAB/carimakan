var mainctrl = angular.module('mainCtrl',[]);

mainctrl.controller('mainController',function($scope){
  $scope.loading = true;
  $scope.pageClass ="";

});


mainctrl.controller('listController',function($scope){
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



});

angular.module('userService',[]).factory('Users',function($http){
  return{
    get: function(id){
      return $http.get('api/profile'+id);
    },
    save: function(userData){
      //console.log("tesm");
      return $http({
        method: 'POST',
        url: 'api/signup',
        headers: { 'Content-Type' : 'application/x-www-form-urlencoded'},
        data: $.param(userData)
      });
    },
    destroy:function(id){
      return $http.delete('api/deleteAcc'+id);
    }
  }

});

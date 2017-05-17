angular.module('userService',[]).factory('Users',function($http,CSRF_TOKEN){
  return{
    get: function(id){
      return $http.get('api/profile'+id);
    },
    save: function(userData){
//      console.log(CSRF_TOKEN["csrfToken"]);
      console.log(userData);
      return $http({
        method: 'POST',
        url: 'api/signup',
        headers: { 'Content-Type' : 'application/x-www-form-urlencoded'},
        data: $.param(userData)
      });
    },
    destroy:function(id){
      return $http.delete('api/deleteAcc'+id);
    },
    login:function(loginData){
      return $http({
        method: 'POST',
        url: 'api/login',
        headers: {'Content-Type' : 'application/x-www-form-urlencoded'},
        data: $.param(loginData)
      });
    },
    logData: function(){
      return $http.get('api/logs');
    },
    logOut: function(){
      return $http.get('api/logout');
    }
  }

});

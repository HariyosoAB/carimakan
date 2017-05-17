angular.module('queryService',[]).factory('Query',function($http,CSRF_TOKEN){
  return{
    getFeatured: function(){
      return $http.get('api/getFeatured');
    }
  }

});

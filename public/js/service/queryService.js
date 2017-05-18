angular.module('queryService',[]).factory('Query',function($http,CSRF_TOKEN){
  return{
    getFeatured: function(){
      return $http.get('api/getFeatured');
    },
    getMood: function(city){
      console.log(city);
      return $http.get('api/getMood/'+city);
    },
    getDetails: function(id){
      return $http.get('api/getDetails/'+id);
    }
  }

});

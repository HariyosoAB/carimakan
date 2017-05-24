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
    },
    getSearch: function(name){
      return $http.get('api/getSearch/'+name);
    },
    getPopular: function(){
      console.log("ww");
      return $http.get('api/getPopular');
    },
    getSuggested: function(name){
      return $http.get('api/getSuggested/'+name);
    },
    getVibes: function() {
      return $http.get('api/getVibes');
    },
    getPrice: function() {
      return $http.get('api/getPrice');
    },
    getEmpty: function() {
      return $http.get('api/getEmpty');
    },
    getAlle: function() {
      return $http.get('api/getAll');
    },
    submitComment: function(commentData){
      return $http({
        method: 'POST',
        url: 'api/submitReview',
        headers: { 'Content-Type' : 'application/x-www-form-urlencoded'},
        data: $.param(commentData)
      });
    }
  }

});

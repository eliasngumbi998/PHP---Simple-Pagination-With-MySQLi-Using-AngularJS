var app = angular.module('myModule', ['angularUtils.directives.dirPagination']);
 
app.controller('myController', function($scope, $http){
 
 
	$http.get('data.php').then(function(response){
		$scope.members = response.data;
	});
 
	$scope.sort = function(keyword){
		$scope.sortKey = keyword;
		$scope.reverse = !$scope.reverse;
	}
});

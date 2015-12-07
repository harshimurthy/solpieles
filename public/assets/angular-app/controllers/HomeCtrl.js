angular.module('APP')

.controller('HomeCtrl', ['$scope', function ($scope) {
	$scope.message = '';

	$scope.setMessage = function(){
		$scope.message = "New Message"
	}

	$scope.setMessage();

	console.log($scope.message)
}])
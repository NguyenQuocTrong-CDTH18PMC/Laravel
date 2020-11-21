console.log('aaaa111');
var app = angular.module("app", [], function($interpolateProvider) {
	$interpolateProvider.startSymbol('<%');
	$interpolateProvider.endSymbol('%>');
});



app.controller('AppController', function($scope, $http){
    $http.get('http://127.0.0.1:8000/api/NhomPhuot').then(function(res){
        console.log(res);
        $scope.nhomphuots = res.data.data;
    });


    $scope.add_nhom = function() {
        console.log($scope.nhom);
    }
});
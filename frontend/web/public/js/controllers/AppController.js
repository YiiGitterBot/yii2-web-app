var app = angular.module("YiiCarmaApp", []);

app.controller("SearchController", function($scope, $http) {
    $http.get('/user/get-user').
        success(function(data, status, headers, config) {
            $scope.users = data;
        });
});


var app = angular.module("app", []);

app.controller("ctrl", function($scope, $http){
    $http.get('https://api.unsplash.com/photos/random/?client_id=ee054638f658cfb440d0b798b6be4a384d8d48273dd5a3cac79b30d4870a92ba').then(function(res){
        console.log(res.data);
        $scope.img1 = res.data.urls.small; 
    });

});




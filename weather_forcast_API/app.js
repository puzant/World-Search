$('.glyphicon').hide();
$('.wrapper').hover(
function(){
    $('.glyphicon').show(700)
});
var app = angular.module("app", ['ngRoute']);

app.controller("ctrl", function ($scope, $http) {
    $scope.city = 'paris';
    $http.get("http://api.apixu.com/v1/current.json?key=07059d7ff3db432bb99153627172305&q=london").then(function (res) {
        console.log(res.data);

        $scope.country = res.data.location.country;
        $scope.localtime = res.data.location.localtime;
        $scope.name = res.data.location.name;
        $scope.region = res.data.location.region;
        $scope.icon = res.data.current.condition.icon;
        $scope.text = res.data.current.condition.text;
        $scope.feelslike = res.data.current.feelslike_c;

    });


});
app.config(function ($routeProvider) {
    $routeProvider
        .when('/DF', {
            controller: 'dFCtrl',
            templateUrl: 'comp/DF.html'
        })
        .when('/ASTR', {
            controller: 'ASTRctrl',
            templateUrl: 'comp/ASTR.html'
        })
        .when('/WF', {
            controller: 'WFctrl',
            templateUrl: 'comp/WF.html'
        });
});

app.controller("dFCtrl", function ($scope, $http) {
    $http.get("http://api.apixu.com/v1/forecast.json?key=07059d7ff3db432bb99153627172305&q=london").then(function (res) {
        console.log(res.data);
        $scope.date = res.data.forecast.forecastday[0].date;
        $scope.date = res.data.forecast.forecastday[0].date;
        $scope.maxtemp = res.data.forecast.forecastday[0].day.maxtemp_c;
        $scope.mintemp = res.data.forecast.forecastday[0].day.mintemp_c;
        $scope.avragetemp = res.data.forecast.forecastday[0].day.avgtemp_c;
        $scope.windspeed = res.data.forecast.forecastday[0].day.maxwind_kph;
        $scope.humidity = res.data.forecast.forecastday[0].day.avghumidity;


    });
});

app.controller('ASTRctrl', function ($scope, $http) {
    $http.get('http://api.apixu.com/v1/forecast.json?key=07059d7ff3db432bb99153627172305&q=london').then(function (res) {
        console.log(res.data);

        $scope.sunrise = res.data.forecast.forecastday[0].astro.sunrise;
        $scope.sunset = res.data.forecast.forecastday[0].astro.sunset;
        $scope.moonrise = res.data.forecast.forecastday[0].astro.moonrise;
        $scope.moonset = res.data.forecast.forecastday[0].astro.moonset;

    });

});

app.controller("WFctrl", function ($scope, $http) {
    $http.get('http://api.apixu.com/v1/forecast.json?key=07059d7ff3db432bb99153627172305&q=london&days=7').then(function (res) {
        console.log(res.data);
        var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        var d1 = new Date(res.data.forecast.forecastday[0].date);
        var d2 = new Date(res.data.forecast.forecastday[1].date);
        var d3 = new Date(res.data.forecast.forecastday[2].date);
        var d4 = new Date(res.data.forecast.forecastday[3].date);
        var d5 = new Date(res.data.forecast.forecastday[4].date);
        var d6 = new Date(res.data.forecast.forecastday[5].date);
        var d7 = new Date(res.data.forecast.forecastday[6].date);
        //this is for days 
        $scope.date1 = days[d1.getDay()];
        $scope.date2 = days[d2.getDay()];
        $scope.date3 = days[d3.getDay()];
        $scope.date4 = days[d4.getDay()];
        $scope.date5 = days[d5.getDay()];
        $scope.date6 = days[d6.getDay()];
        $scope.date7 = days[d7.getDay()];

        //this is for tempreture 
        $scope.temp1 = res.data.forecast.forecastday[0].day.maxtemp_c;
        $scope.temp2 = res.data.forecast.forecastday[1].day.maxtemp_c;
        $scope.temp3 = res.data.forecast.forecastday[2].day.maxtemp_c;
        $scope.temp4 = res.data.forecast.forecastday[3].day.maxtemp_c;
        $scope.temp5 = res.data.forecast.forecastday[4].day.maxtemp_c;
        $scope.temp6 = res.data.forecast.forecastday[5].day.maxtemp_c;
        $scope.temp7 = res.data.forecast.forecastday[6].day.maxtemp_c;

        //this is for condition
        $scope.con1 = res.data.forecast.forecastday[0].day.condition.icon;
        $scope.con2 = res.data.forecast.forecastday[1].day.condition.icon;
        $scope.con3 = res.data.forecast.forecastday[2].day.condition.icon;
        $scope.con4 = res.data.forecast.forecastday[3].day.condition.icon;
        $scope.con5 = res.data.forecast.forecastday[4].day.condition.icon;
        $scope.con6 = res.data.forecast.forecastday[5].day.condition.icon;
        $scope.con7 = res.data.forecast.forecastday[6].day.condition.icon;

        //this is for humidity
        $scope.humidity1 = res.data.forecast.forecastday[0].day.avghumidity;
        $scope.humidity2 = res.data.forecast.forecastday[1].day.avghumidity;
        $scope.humidity3 = res.data.forecast.forecastday[2].day.avghumidity;
        $scope.humidity4 = res.data.forecast.forecastday[3].day.avghumidity;
        $scope.humidity5 = res.data.forecast.forecastday[4].day.avghumidity;
        $scope.humidity6 = res.data.forecast.forecastday[5].day.avghumidity;
        $scope.humidity7 = res.data.forecast.forecastday[6].day.avghumidity;

        //this is for wind speed
        $scope.windspeed1 = res.data.forecast.forecastday[0].day.maxwind_kph;
        $scope.windspeed2 = res.data.forecast.forecastday[1].day.maxwind_kph;
        $scope.windspeed3 = res.data.forecast.forecastday[2].day.maxwind_kph;
        $scope.windspeed4 = res.data.forecast.forecastday[3].day.maxwind_kph;
        $scope.windspeed5 = res.data.forecast.forecastday[4].day.maxwind_kph;
        $scope.windspeed6 = res.data.forecast.forecastday[5].day.maxwind_kph;
        $scope.windspeed7 = res.data.forecast.forecastday[6].day.maxwind_kph;



    });
});

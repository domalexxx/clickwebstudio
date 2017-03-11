var weatherApp = angular.module('weatherApp', []);

weatherApp.controller('AppCtrl', ['$scope', function ($scope) {
    
    /* This data cannot be changed */
    $scope.weather = [{"high":"53","low":"45","text":"Showers","cityName":"Vancouver"},
                   {"high":"76","low":"61","text":"Partly Cloudy", "cityName":"Havana Cuba"},
                   {"high":"77","low":"56","text":"Clear","cityName":"San Diego"}, 
                   {"high":"82","low":"70","text":"Partly Cloudy","cityName":"Honolulu"}];

    // Define title model.
    $scope.title = "AngularJS Tutorial";
    
    
    $scope.getAllWeather = function() {
        // console.log("I am here");
        return  $scope.weather;
    } 
    // Return weather to application.
    $scope.forecast = $scope.getAllWeather();
    
    $scope.showAlert = function(city)  {
        $scope.showWeather = true;
        for(var i=0; i<$scope.weather.length; i++) {
            if(city ==  $scope.weather[i].cityName){
                $scope.cityName=$scope.weather[i].cityName;
                $scope.condition=$scope.weather[i].text;
                $scope.highTemp=$scope.weather[i].high;
                $scope.lowTemp=$scope.weather[i].low;
            }
        }
    }
    $scope.getCelsius = function (highTemp, lowTemp) {
        for(var i=0; i<$scope.weather.length; i++) {
            $scope.weather[i].high=($scope.weather[i].high- 32) * 5 / 9;
        }
    }
    $scope.getFahrenheit = function (temp) {
        return temp * 9 / 5 + 32;
    }
}]);

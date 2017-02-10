loginApp.controller('aircraftCtrl', function($scope,$http) {


    $scope.aircraft=function () {
        $http.post('api/public/api/v1/createAircraft', {
        }).then(function(response) {
            console.log(response.data.aircrafts);
            $scope.aircrafts=response.data.aircrafts;
        });
    }


});
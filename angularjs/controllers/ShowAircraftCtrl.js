loginApp.controller('ShowAircraftCtrl', function($scope,$http) {


    // $scope.aircraft=function () {
        $http.post('api/public/api/v1/showAircraft', {
        }).then(function(response) {
            console.log(response.data);
            // $scope.aircrafts=response.data.aircrafts;
        });
    // }


});
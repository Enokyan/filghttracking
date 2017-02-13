loginApp.controller('ShowAircraftCtrl', function($scope,$http) {

    $http.post('api/public/api/v1/showAircraft', {
    }).then(function(response) {
        var aircraft = response.data.aircrafts;
        $scope.aircrafts=aircraft

    });

    $scope.deleteAir = function(id){
        formData = new FormData();
        formData.append('id', id);
        $http({
            url: 'api/public/api/v1/deleteAircraft',
            method: "POST",
            data: formData
        }).then(function(response) {
            console.log(response);
        });
    };

});
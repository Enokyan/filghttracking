loginApp.controller('homeCtrl',  function($scope,$location,$localStorage,$http) {
    if(!$localStorage.token){
        $scope.open_clos = false;
        $location.path('/login');
    }
        $scope.open_clos = true;


    $scope.aircraft_table = false;
    $scope.aircraft=function () {
        $scope.aircraft_table = true;
        $http.post('api/public/api/v1/aircrafttype', {
        }).then(function(response) {
            $scope.aircrafts=response.data.aircrafts;
        });
    };
    $scope.openLogOut=function () {
        // var elem = document.querySelector("#open_clos");
        // console.log(elem);
        // elem.Attribute('class','open');
        // console.log(a)
    };
    $scope.sign_out = function () {
        alert(22)
        localStorage.clear();
        $location.path('.login');
    };
    $scope.example = function () {
        angular.element('.treeview').removeAttr('disabled');
    };
});








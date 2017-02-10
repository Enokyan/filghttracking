loginApp.controller('loginCtrl',  function($scope, $http, $location, $localStorage) {
    if(angular.isUndefined($localStorage.token)){
        $scope.login=function () {
            if($scope.email && $scope.password) {

                formData = new FormData();
                formData.append('email', $scope.email);
                formData.append('password', $scope.password);

                $http({
                    url:'api/public/api/v1/authenticate',
                    method: "post",
                    data: formData,
                    headers: {'Content-Type': undefined}
                }).then(function(response) {
                    if(response.data.token){
                        $localStorage.token = response.data.token;
                        $location.path('/home');
                    }
                    else{
                        $scope.error = true;
                    }

                });
            }
        };
    }
    else{
        $location.path('/home');
    }
});

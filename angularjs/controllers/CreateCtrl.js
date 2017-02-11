loginApp.controller('CreateCtrl', function($scope,$http) {

    /* cretae database m aircraft*/
    $scope.insert = function () {
            formData = new FormData();
            for (var i = 0; i < $scope.myfile.length; i++) {
                file = $scope.myfile.item(i);
                formData.append('file[]', file);
            }
            formData.append('name', $scope.name);
            formData.append('model', $scope.model);
            formData.append('manufacturer', $scope.manufacturer);
            formData.append('classification', $scope.classification);
            formData.append('seats', $scope.seats);
            formData.append('speed', $scope.speed);
            formData.append('range', $scope.range);
            formData.append('range_norm', $scope.range_norm);
            formData.append('height', $scope.height);
            formData.append('width', $scope.width);

            $http({
                url: 'api/public/api/v1/createAircraft',
                method: "POST",
                data: formData,
                headers: {'Content-Type': undefined}

            });

            $scope.name = '';    $scope.model = '';  $scope.manufacturer = '';  $scope.classification = ''; $scope.seats = '';   $scope.speed = '';
            $scope.range = '';   $scope.range_norm = '';    $scope.height = '';     $scope.width = '';

    };
    /* create i uploade file*/
    $scope.Upload = function(event){
        if(event.target.files) {
            var files = event.target.files;
            var hatsData = angular.toJson(files);
            $scope.myfile = files;
        }
    };
});
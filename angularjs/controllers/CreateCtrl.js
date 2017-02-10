
loginApp.controller('CreateCtrl', function($scope,$http) {
    $scope.insert = function () {

        // $scope.data = result;
        // if ($scope.name && $scope.type && $scope.age) {
        //     $scope.data.results.push({
        //         name: $scope.name,
        //         type: $scope.type,
        //         age: $scope.age
        //     });


            formData = new FormData();
            formData.append('file', $scope.myfile);
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

            console.log($scope.myfile);
            $http({
                url: 'api/public/api/v1/createAircraft',
                method: "POST",
                data: formData,
                headers: {'Content-Type': undefined}

            });

            // $scope.name = '';
        // }
    };
});
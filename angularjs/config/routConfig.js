loginApp.config(function($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.otherwise('/home');

    $stateProvider
        .state('home', {
            url: '/home',
            templateUrl: 'views/layout/main.html'
        })
        .state('login', {
            url: '/login',
            templateUrl: 'views/login.html',
            controller: 'loginCtrl'
        })
        .state('create', {
            url: '/create',
            templateUrl: 'views/Aircrafts/createAircraft.html',
            controller: 'CreateCtrl'
        })
        .state('showAircraft', {
            url: '/showAircraft',
            templateUrl: 'views/Aircrafts/showAircraft.html',
            controller: 'ShowAircraftCtrl'
        });


});



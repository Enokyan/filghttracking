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
            templateUrl: 'views/createAircraft.html',
            controller: 'CreateCtrl'
        });


});



// loginApp.config(['$routeProvider', function($routeProvider) {
//     //
//     // $routeProvider.when('/', {
//     //     templateUrl: 'views/home.html',
//     //     controller: 'homeCtrl'
//     // });
//
//     $routeProvider.when('/login', {
//         templateUrl: 'views/examples/login.html'
//     });

//     $routeProvider.when('/aircraft', {
//         templateUrl: 'views/aircraft.html',
//         controller: 'aircraftCtrl'
//     });
//
//     $routeProvider.when('/create', {
//         templateUrl: '../../views/createAircraft.html',
//         controller: 'CreateCtrl'
//     });
//     // $urlRouterProvider.otherwise('/error404');
// }]);





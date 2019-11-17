var app = angular.module('App', ['ui.router']);

app.run(['$rootScope', '$state', '$stateParams', function ($rootScope, $state, $stateParams) {
        $rootScope.$state = $state;
        $rootScope.$stateParams = $stateParams;
    }]);

app.config(['$urlRouterProvider', '$stateProvider', function ($urlRouterProvider, $stateProvider) {
        $urlRouterProvider.otherwise('/home');

        $stateProvider.state('home', {
            url: '/home',
            templateUrl: 'app/pages/home.html',
            data: {
                title: 'Main Dashboard'
            }
        })
                .state('sales', {
                    url: '/sales',
                    templateUrl: 'app/pages/sales.html',
                    data: {
                        title: 'Sales Details'
                    },
                    controller: 'SalesCtrl'
                })
                .state('customer', {
                    url: '/customer',
                    templateUrl: 'app/pages/customer.html',
                    data: {
                        title: 'Customer Data'
                    },
                    controller: 'CustomerCtrl'
                })

    }]);
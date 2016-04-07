var mainApp = angular.module('mainApp', [
    'ngRoute','ngAnimate',
    'mainAppControllers'
]).constant('API_URL', 'http://localhost/laravel_test/public/');
mainApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
        when('/', {
            templateUrl: '/laravel_test/resources/views/student/add_student.php',
            controller: 'addController'
        })
    }]);

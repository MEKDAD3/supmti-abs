var sampleApp = angular.module('sampleApp', []);
sampleApp.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/home.html',
        controller: 'HomeController'
    }).
      when('/students', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/students.html',
        controller: 'StudentController'
      }).
	  when('/addcharts', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/charts.html',
        controller: 'chartsController'
      }).
	      when('/addtables', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/tables.html',
        controller: 'tablesController'
      }).
	      when('/addforms', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/forms.html',
        controller: 'formtCtrl'
      }).
	      when('/addpanels', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/panels.html',
        controller: 'panelsController'
      }).
	    when('/addicons', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/icons.html',
        controller: 'iconsController'
      }).
	  
      otherwise({
        redirectTo: '/'
      });
}]);


 
 

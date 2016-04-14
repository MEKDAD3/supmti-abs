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
	  when('/profs', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/profs.html',
        controller: 'profsController'
      }).
	      when('/modules', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/modules.html',
        controller: 'modulesController'
      }).
	      when('/salarier', {
        templateUrl: '/supmti-Gabsence/resources/views/supmti/pages/salarier.html',
        controller: 'salarierController'
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


 
 

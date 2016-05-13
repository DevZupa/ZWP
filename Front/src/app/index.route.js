(function() {
  'use strict';

  angular
    .module('zwp')
    .config(routeConfig);

  function routeConfig($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'app/main/main.html',
        controller: 'MainController',
        controllerAs: 'main'
      })
      .when('/admin/players', {
        templateUrl: 'app/admin/players/players.html',
        controller: 'PlayersController',
        controllerAs: 'pl'
      })
      .otherwise({
        redirectTo: '/'
      });
  }

})();

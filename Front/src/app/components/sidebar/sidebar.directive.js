(function() {
  'use strict';

  angular
    .module('zwp')
    .directive('zupaSidebar', zupaSidebar);

  /** @ngInject */
  function zupaSidebar() {
    var directive = {
      restrict: 'E',
      templateUrl: 'app/components/sidebar/sidebar.html',
      scope: {
          creationDate: '='
      },
      controller: SideNavbarController,
      controllerAs: 'sb',
      bindToController: true
    };

    return directive;

    /** @ngInject */
    function SideNavbarController(moment) {
      var sb = this;

      // "vm.creationDate" is available by directive option "bindToController: true"
      sb.relativeDate = moment(sb.creationDate).fromNow();
    }
  }

})();

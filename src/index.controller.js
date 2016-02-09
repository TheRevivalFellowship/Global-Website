(function () {
    'use strict';

    angular
        .module('trf')
        .controller('IndexController', IndexController);

    IndexController.$inject = ['StateManager'];

    function IndexController(StateManager) {
        var vm = this;


        /* ---------------------------------------- /*
            VIEW MODEL
        /* ---------------------------------------- */

        vm.state = StateManager;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */


    }

})();

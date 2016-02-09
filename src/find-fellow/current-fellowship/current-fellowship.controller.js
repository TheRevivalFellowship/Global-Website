(function () {
    'use strict';

    angular
        .module('trf')
        .controller('CurrentFellowshipController', CurrentFellowshipController);

    CurrentFellowshipController.$inject = ['CurrentFellowship']

    function CurrentFellowshipController(CurrentFellowship) {
        var vm = this;


        /* ---------------------------------------- /*
            VIEW MODEL
        /* ---------------------------------------- */

        vm.fellowship = CurrentFellowship.fellowship;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */



        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */


    }

})();

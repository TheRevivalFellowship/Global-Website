(function () {
    'use strict';

    angular
        .module('FellowshipFinder')
        .factory('CurrentFellowship', CurrentFellowship);

    CurrentFellowship.$inject = [];

    function CurrentFellowship() {
        var factory,
            fellowship;

        fellowship = {
            data: {}
        };


        /* ---------------------------------------- /*
            FACTORY
        /* ---------------------------------------- */

        factory = {};

        factory.fellowship = fellowship;
        factory.setCurrentFellowship = setCurrentFellowship;

        return factory;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */

        function setCurrentFellowship(newFellowship) {
            fellowship.data = newFellowship;
        }


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */


    }

})();

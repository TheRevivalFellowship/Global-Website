(function () {
    'use strict';

    angular
        .module('trf')
        .factory('StateManager', StateManager);

    StateManager.$inject = ['CurrentFellowship'];

    function StateManager() {
        var factory,
            state;

        /* ---------------------------------------- /*
            BOOTSTRAP
        /* ---------------------------------------- */

        state = 'default';

        /* ---------------------------------------- /*
            FACTORY
        /* ---------------------------------------- */

        factory = {};

        factory.get = get;

        return factory;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */

        function get() {
            return state;
        }


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */


    }

})();

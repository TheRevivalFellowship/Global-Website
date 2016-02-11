(function () {
    'use strict';

    angular
        .module('trf')
        .factory('StateManager', StateManager);

    StateManager.$inject = [];

    function StateManager() {
        var factory,
            state,
            validStates;

        /* ---------------------------------------- /*
            BOOTSTRAP
        /* ---------------------------------------- */

        state = 'default';

        validStates = [
            'default',
            'locating',
            'single-fellowship',
            'list-fellowships'
        ];

        /* ---------------------------------------- /*
            FACTORY
        /* ---------------------------------------- */

        factory = {};

        factory.get = get;
        factory.set = set;

        return factory;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */

        function get() {
            return state;
        }

        function set(newState) {
            if( validStates.indexOf(newState) >= 0 ) {
                return state = newState;
            }
            else {
                return false;
            }
        }


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */


    }

})();

(function () {
    'use strict';

    angular
        .module('FellowshipFinder')
        .factory('FellowshipsModel', FellowshipsModel);

    FellowshipsModel.$inject = ['$http'];

    function FellowshipsModel($http) {
        var factory;


        /* ---------------------------------------- /*
            FACTORY
        /* ---------------------------------------- */

        factory = {};

        factory.getData = getData;

        return factory;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */

        function getData() {
            return $http.get('assets/data/fellowships-global.json');
        }


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */


    }

})();

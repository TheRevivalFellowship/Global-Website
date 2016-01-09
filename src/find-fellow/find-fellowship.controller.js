(function () {
    'use strict';

    angular
        .module('FellowshipFinder')
        .controller('FindFellowshipController', FindFellowshipController);

    FindFellowshipController.$inject = ['FellowshipsModel', '$timeout']

    function FindFellowshipController(FellowshipsModel, $timeout) {
        var vm = this,
            stateService,
            fellowshipsData;

        stateService = {
            // [default, locating, single, list]
            state: 'default'
        }

        fellowshipsData = FellowshipsModel.data;


        /* ---------------------------------------- /*
            VIEW MODEL
        /* ---------------------------------------- */

        vm.stateService = stateService;
        vm.fellowshipsData = fellowshipsData;

        vm.useCurrentLocation = useCurrentLocation;
        vm.listAllFellowships = listAllFellowships;
        vm.close = close;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */

        function useCurrentLocation() {
            stateService.state = 'locating';

            $timeout(function() {
                stateService.state = 'single';
            }, 1000);

        }

        function listAllFellowships() {
            stateService.state = 'list';

        }

        function close() {
            stateService.state = 'default';
        }


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */

    }

})();

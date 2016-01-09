(function () {
    'use strict';

    angular
        .module('FellowshipFinder')
        .controller('FindFellowshipController', FindFellowshipController);

    FindFellowshipController.$inject = ['FellowshipsModel', '$timeout']

    function FindFellowshipController(FellowshipsModel, $timeout) {
        var vm = this,
            stateService,
            fellowshipsData,
            classes;

        stateService = {
            // [default, locating, single, list]
            state: 'default'
        };

        classes = {
            regionOpen: 'ship-list__region--open'
        };

        fellowshipsData = FellowshipsModel.data;


        /* ---------------------------------------- /*
            VIEW MODEL
        /* ---------------------------------------- */

        vm.stateService = stateService;
        vm.fellowshipsData = fellowshipsData;

        vm.useCurrentLocation = useCurrentLocation;
        vm.listAllFellowships = listAllFellowships;
        vm.close = close;
        vm.toggleRegion = toggleRegion;
        vm.openRegion = openRegion;
        vm.closeRegion = closeRegion;


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

        function close(event) {
            stateService.state = 'default';
        }

        function openRegion(event, numParents) {
            var region = getParent(event, numParents);

            region.addClass(classes.regionOpen);
        }

        function toggleRegion(event, numParents) {
            var region = getParent(event, numParents);

            region.toggleClass(classes.regionOpen);
        }

        function closeRegion(event, numParents, stopProp) {
            var region = getParent(event, numParents);

            region.removeClass(classes.regionOpen);

            if(stopProp) {
                event.stopPropagation();
            }
        }


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */

        function getParent(event, numParents) {
            var element, parent;

            element = event.currentTarget;

            parent = angular
                .element(element)
                .parent(); // 1

            if(numParents == 2) {
                parent = parent.parent(); // 2
            }

            if(numParents == 3) {
                parent = parent.parent().parent(); // 3
            }

            return parent;
        }

    }

})();

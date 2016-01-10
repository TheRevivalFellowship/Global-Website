(function () {
    'use strict';

    angular
        .module('FellowshipFinder')
        .controller('FindFellowshipController', FindFellowshipController);

    FindFellowshipController.$inject = ['FellowshipsModel', '$geolocation']

    function FindFellowshipController(FellowshipsModel, $geolocation) {
        var vm = this,
            stateService,
            fellowshipsData,
            classes;

        stateService = {
            // [default, locating, single, list]
            state: 'default'
        };

        classes = {
            regionOpen: 'ship-list__region--regions-open',
            fellowshipOpen: 'ship-list__region--fellowship-open'
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
        vm.openFellowship = openFellowship;
        vm.closeFellowship = closeFellowship;
        vm.closeFellowshipSingle = closeFellowshipSingle;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */

        function useCurrentLocation() {
            stateService.state = 'locating';

            $geolocation.getCurrentPosition({
                timeout: 30000 // 30 seconds
            })
                .then(function gotPositionSuccesfully(position) {
                    stateService.state = 'single';
                })
                .catch(function unableToGetPosition() {
                    stateService.state = 'list';
                });
        }

        function listAllFellowships() {
            stateService.state = 'list';

        }

        function close() {
            stateService.state = 'default';
        }

        function openRegion(event, numParents) {
            var region = getParent(event, numParents);

            region.addClass(classes.regionOpen);
        }

        function toggleRegion(event, numParents) {
            var region = getParent(event, numParents);

            if(region.hasClass(classes.regionOpen) || region.hasClass(classes.fellowshipOpen))
            {
                region.removeClass(classes.regionOpen);
                region.removeClass(classes.fellowshipOpen);
            }
            else
            {
                region.addClass(classes.regionOpen);
                region.removeClass(classes.fellowshipOpen);
            }
        }

        function closeRegion(event, numParents, stopProp) {
            var region = getParent(event, numParents);

            region.removeClass(classes.regionOpen);

            if(stopProp) {
                event.stopPropagation();
            }
        }

        function openFellowship(event, numParents) {
            var region = getParent(event, numParents);

            region.removeClass(classes.regionOpen);
            region.addClass(classes.fellowshipOpen);
        }

        function closeFellowship(event, numParents) {
            var region = getParent(event, numParents);

            region.addClass(classes.regionOpen);
            region.removeClass(classes.fellowshipOpen);
        }

        function closeFellowshipSingle() {
            stateService.state = 'default';
        }


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */

        function getParent(event, numParents) {
            var element, parent;

            element = event.currentTarget;

            // TODO: Rebuild into a for loop
            parent = angular
                .element(element)
                .parent(); // 1

            if(numParents == 2) {
                parent = parent.parent(); // 2
            }

            if(numParents == 3) {
                parent = parent
                    .parent()
                    .parent(); // 3
            }

            if(numParents == 4) {
                parent = parent
                    .parent()
                    .parent()
                    .parent(); // 4
            }

            if(numParents == 5) {
                parent = parent
                    .parent()
                    .parent()
                    .parent()
                    .parent(); // 5
            }

            return parent;
        }

    }

})();

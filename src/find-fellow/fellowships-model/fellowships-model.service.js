(function () {
    'use strict';

    angular
        .module('FellowshipFinder')
        .factory('FellowshipsModel', FellowshipsModel);

    FellowshipsModel.$inject = [];

    function FellowshipsModel() {
        var factory,
            data;

        data = [
            {
                "region": "Asia",
                "sub-regions": [
                    {
                        "name": "Indonesia",
                        "fellowships": [
                            {
                                "name": "Indonesia",
                                "country": "Indonesia",
                                "state": "IN",
                                "city": "Indonesia",
                                "address_1": "123 Street",
                                "address_2": "",
                                "latitude": "1234.6677",
                                "longitude": "-12356.67",
                                "contacts": [
                                    {
                                        "name": "Pst Colin",
                                        "phone": "123467",
                                        "mobile": "0213412",
                                        "email": "colin@example.com"
                                    }
                                ],
                                "social": [
                                    {
                                        "twitter": "@rfasia",
                                        "website": "http://www.rfasia.com/"
                                    }
                                ],
                                "meetings": [
                                    {
                                        "week-day": "Sunday",
                                        "time": "10:30am",
                                        "description": ""
                                    }
                                ]
                            },
                            {
                                "name": "Bali",
                                "country": "Bali",
                                "etc.":"etc."
                            }
                        ]
                    }
                ]
            },
            {
                "region": "Australia",
                "sub-regions": [
                    {
                        "name": "South Australia",
                        "fellowships": []
                    },
                    {
                        "name": "New South Wales",
                        "fellowships": []
                    }
                ]
            }
        ];


        /* ---------------------------------------- /*
            FACTORY
        /* ---------------------------------------- */

        factory = {};

        factory.data = data;

        return factory;


        /* ---------------------------------------- /*
            PUBLIC
        /* ---------------------------------------- */


        /* ---------------------------------------- /*
            PRIVATE
        /* ---------------------------------------- */


    }

})();

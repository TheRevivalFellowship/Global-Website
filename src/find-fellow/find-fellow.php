<!-- FIND A FELLOWSHIP -->
<section class="find-fellow outer-container"
    ng-class="'find-fellow--' + ffc.stateService.state">

    <div class="find-fellow__header" ng-hide="ffc.stateService.state == 'locating' || ffc.stateService.state == 'single'">
        <h3 class="find-fellow__header__title">Find a fellowship</h3>
        <div class="find-fellow__header__actions">
            <button class="button"
                ng-show="ffc.stateService.state == 'default'"
                ng-click="ffc.useCurrentLocation()">
                Use current location
            </button>
            <button class="button"
                ng-show="ffc.stateService.state == 'default'"
                ng-click="ffc.listAllFellowships()">
                List all fellowships
            </button>
            <button class="button"
                ng-show="ffc.stateService.state == 'list'"
                ng-click="ffc.close()">
                Close
            </button>
        </div>
    </div>

    <!-- LOCATING -->
    <div class="locating" ng-show="ffc.stateService.state == 'locating'">Locating...</div>

    <!-- SINGLE LOCATED FELLOWSHIP -->
    <div class="fellowship" ng-show="ffc.stateService.state == 'single'">
        <div class="fellowship__header">
            <div class="fellowship__header__info">
                <h2 class="fellowship__header__info__title">Sydney Revival Fellowship</h2>
                <h4 class="fellowship__header__info__sub-title">Sydney, NSW</h4>
            </div>
            <div class="fellowship__header__actions">
                <div class="fellowship__footer__action">
                    <button class="button" ng-click="ffc.closeFellowshipSingle()">Close</button>
                </div>
                <div class="fellowship__footer__action">
                    <a href="#">Correction</a>
                </div>
            </div>
        </div>
        <div class="fellowship__body">
            <div class="fellowship__body__info">
                <div class="fellowship__body__info__title">Sunday: 10:30am</div>
                <div class="fellowship__body__info__sub-title">Pst Andrew Riggs</div>
                <div class="fellowship__body__info__copy">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at consequatur eligendi, esse excepturi expedita fuga hic odit reiciendis suscipit.
                </div>
            </div>
            <div class="fellowship__body__references">
                <div class="fellowship__body____references__link">
                    <span>[icon]</span>
                    <a href="#">Link</a>
                </div>
                <div class="fellowship__body____references__link">
                    <span>[icon]</span>
                    <a href="#">Link</a>
                </div>
                <div class="fellowship__body____references__link">
                    <span>[icon]</span>
                    <a href="#">Link</a>
                </div>
                <div class="fellowship__body____references__link">
                    <span>[icon]</span>
                    <a href="#">Link</a>
                </div>
            </div>
        </div>
        <div class="fellowship__footer">
            <div class="fellowship__footer__action">
                <button class="button" ng-click="ffc.closeFellowshipSingle()">Close</button>
            </div>
            <div class="fellowship__footer__action">
                <a href="#">Correction</a>
            </div>
        </div>
    </div>


    <!-- SHIP LIST -->
    <div class="ship-list" ng-show="ffc.stateService.state == 'list'">
        <div class="ship-list__region" ng-repeat="fellowship in ffc.fellowshipsData">
            <div class="ship-list__region__header"
                ng-click="ffc.toggleRegion($event, 1)">
                <div class="ship-list__region__header__title">{{fellowship.region}}</div>
                <div class="ship-list__region__header__icon ship-list__region__header__icon--arrow">
                    <img src="assets/img/icon--arrow-down-metalic.png" alt="">
                </div>
                <div class="ship-list__region__header__icon ship-list__region__header__icon--close">
                    <img src="assets/img/icon--close-white-transp.png" alt="">
                </div>
            </div>

            <div class="ship-list__region__sub-header">
                <div class="ship-list__region__sub-header__title">
                    Principle Pastor
                    <label class="ship-list__region__sub-header__title__label">
                        Pst Paul Nobel
                    </label>
                    <a href="#" class="ship-list__region__sub-header__title__contact-icon">
                        [mail icon]
                    </a>
                </div>
            </div>

            <!-- SUB REGIONS -->
            <div class="ship-list__sub-region">
                <h3 class="ship-list__sub-region__title">
                    South Australia
                </h3>
                <div class="ship-list__sub-region__fellowship" ng-click="ffc.openFellowship($event, 2)">
                    <a class="ship-list__sub-region__fellowship__title">
                        Adelaide, Elizabeth SA
                    </a>
                </div>
                <div class="ship-list__sub-region__fellowship" ng-click="ffc.openFellowship($event, 2)">
                    <a class="ship-list__sub-region__fellowship__title">
                        Adelaide, Elizabeth SA
                    </a>
                </div>
            </div>
            <div class="ship-list__sub-region">
                <h3 class="ship-list__sub-region__title">
                    New South Wales
                </h3>
                <div class="ship-list__sub-region__fellowship" ng-click="ffc.openFellowship($event, 2)">
                    <a class="ship-list__sub-region__fellowship__title">
                        Sydney NSW
                    </a>
                </div>
                <div class="ship-list__sub-region__fellowship" ng-click="ffc.openFellowship($event, 2)">
                    <a class="ship-list__sub-region__fellowship__title">
                        Newcastle NSW
                    </a>
                </div>
            </div>

            <!-- SINGLE FELLOWSHIP -->
            <div class="fellowship">
                <div class="fellowship__header">
                    <div class="fellowship__header__info">
                        <h2 class="fellowship__header__info__title">Sydney Revival Fellowship</h2>
                        <h4 class="fellowship__header__info__sub-title">Sydney, NSW</h4>
                    </div>
                    <div class="fellowship__header__actions">
                        <div class="fellowship__footer__action">
                            <button class="button" ng-click="ffc.closeFellowship($event, 5)">Close</button>
                        </div>
                        <div class="fellowship__footer__action">
                            <a href="#">Correction</a>
                        </div>
                    </div>
                </div>
                <div class="fellowship__body">
                    <div class="fellowship__body__info">
                        <div class="fellowship__body__info__title">Sunday: 10:30am</div>
                        <div class="fellowship__body__info__sub-title">Pst Andrew Riggs</div>
                        <div class="fellowship__body__info__copy">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at consequatur eligendi, esse excepturi expedita fuga hic odit reiciendis suscipit.
                        </div>
                    </div>
                    <div class="fellowship__body__references">
                        <div class="fellowship__body____references__link">
                            <span>[icon]</span>
                            <a href="#">Link</a>
                        </div>
                        <div class="fellowship__body____references__link">
                            <span>[icon]</span>
                            <a href="#">Link</a>
                        </div>
                        <div class="fellowship__body____references__link">
                            <span>[icon]</span>
                            <a href="#">Link</a>
                        </div>
                        <div class="fellowship__body____references__link">
                            <span>[icon]</span>
                            <a href="#">Link</a>
                        </div>
                    </div>
                </div>
                <div class="fellowship__footer">
                    <div class="fellowship__footer__action">
                        <button class="button" ng-click="ffc.closeFellowship($event, 4)">Close</button>
                    </div>
                    <div class="fellowship__footer__action">
                        <a href="#">Correction</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

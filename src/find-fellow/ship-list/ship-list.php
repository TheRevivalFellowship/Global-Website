<!-- SHIP LIST -->
<div class="ship-list" ng-if="vm.state.get() == 'list-fellowships'">

    <div class="ship-list__region" ng-repeat="fellowship in vm.fellowshipsData">

        <div class="ship-list__region__header"
            ng-click="vm.toggleRegion($event, 1)">
            <div class="ship-list__region__header__title">{{fellowship.name}}</div>
            <div class="ship-list__region__header__icon ship-list__region__header__icon--arrow">
                <img src="assets/img/icon--arrow-down-metalic.png" alt="">
            </div>
            <div class="ship-list__region__header__icon ship-list__region__header__icon--close">
                <img src="assets/img/icon--close-white-transp.png" alt="">
            </div>
        </div>

        <div class="ship-list__region__sub-header"
            ng-show="vm.state.get() == 'list-fellowships'">
            <div class="ship-list__region__sub-header__title">
                Principle Pastor:
                <a ng-href="mailto:{{fellowship.principlePastor.email}}" class="ship-list__region__sub-header__title__link">
                    <span class="ship-list__region__sub-header__title__label">
                        {{fellowship.principlePastor.name}}
                    </span>
                    <span class="ship-list__region__sub-header__title__contact-icon">
                        <i class="fa fa-envelope"></i>
                    </span>
                </a>
            </div>
        </div>

        <!-- SUB REGIONS -->
        <div class="ship-list__sub-region" ng-repeat="subRegion in fellowship.subRegion">
            <h3 class="ship-list__sub-region__title">
                {{subRegion.name}}
            </h3>
            <div class="ship-list__sub-region__fellowship"
                ng-repeat="local_fellowship in subRegion.fellowships"
                ng-click="vm.openFellowship(local_fellowship, $event, 2)">
                <a class="ship-list__sub-region__fellowship__title">
                    <span>{{local_fellowship.name}}</span>
                    <img src="assets/img/icon-arrow-right.svg"
                    class="ship-list__sub-region__fellowship__title__arrow"
                    alt="">
                </a>
            </div>
        </div>

        <!-- SINGLE FELLOWSHIP -->
        <div class="fellowship" ng-controller="CurrentFellowshipController as curfel">
            <div class="fellowship__header">
                <div class="fellowship__header__info">
                    <h2 class="fellowship__header__info__title">
                        {{curfel.fellowship.data.name}}
                    </h2>
                    <h4 class="fellowship__header__info__sub-title">Sydney, NSW [??]</h4>
                </div>
                <div class="fellowship__header__actions">
                    <div class="fellowship__footer__action">
                        <button class="button" ng-click="vm.closeFellowship($event, 5)">Close</button>
                    </div>
                    <div class="fellowship__footer__action">
                        <a href="#">Correction</a>
                    </div>
                </div>
            </div>
            <div class="fellowship__body">
                <div class="fellowship__body__info">

                    <div class="fellowship__body__info__title">
                        {{curfel.fellowship.data.meetings[0].dayOfWeek}}:
                        {{curfel.fellowship.data.meetings[0].startTime}}
                    </div>
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
                    <button class="button" ng-click="vm.closeFellowship($event, 4)">Close</button>
                </div>
                <div class="fellowship__footer__action">
                    <a href="#">Correction</a>
                </div>
            </div>
        </div>

    </div>
</div>

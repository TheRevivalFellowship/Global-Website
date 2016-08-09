<?php /*
<!-- FIND A FELLOWSHIP -->
<section class="find-fellow outer-container">

    <div class="find-fellow__header" ng-if="vm.state.get() != 'locating' || vm.state.get() != 'single-fellowship'">
        <h3 class="find-fellow__header__title">Find a fellowship</h3>
        <div class="find-fellow__header__actions">
            <button class="button find-fellow__header__actions__use-loc"
                ng-if="vm.state.get() == 'default'"
                ng-click="vm.useCurrentLocation()">
                Use current location
            </button>
            <button class="button find-fellow__header__actions__list-all"
                ng-show="vm.state.get() == 'default'"
                ng-click="vm.listAllFellowships()">
                List all fellowships
            </button>
            <button class="button find-fellow__header__actions__close"
                ng-show="vm.state.get() == 'list-fellowships'"
                ng-click="vm.close()">
                Close
            </button>
        </div>
    </div>

</section>


<section class="find-fellow outer-container">
    <!-- LOCATING -->
    <div class="locating" ng-if="vm.state.get() == 'locating'">Locating...</div>
</section>


<section class="find-fellow outer-container">

    <!-- SINGLE LOCATED FELLOWSHIP -->
    <div class="fellowship" ng-if="vm.state.get() == 'single-fellowship'">
        <div class="fellowship__header">
            <div class="fellowship__header__info">
                <h2 class="fellowship__header__info__title">{fellowship.name}</h2>
                <h4 class="fellowship__header__info__sub-title">{?.city}, {?.state}</h4>
            </div>
            <div class="fellowship__header__actions">
                <div class="fellowship__footer__action">
                    <button class="button" ng-click="vm.closeFellowshipSingle()">Close</button>
                </div>
                <div class="fellowship__footer__action">
                    <a href="#">Correction</a>
                </div>
            </div>
        </div>
        <div class="fellowship__body">
            <div class="fellowship__body__info">
                <div class="fellowship__body__info__title">{fellowship.meetings[0].dayOfWeek}: {fellowship.meetings[0].startTime}</div>
                <div class="fellowship__body__info__sub-title">{fellowship.contact.title + fellowship.contact.firstName + fellowship.contact.lastName}</div>
                <div class="fellowship__body__info__copy">
                    {?.description}
                </div>
            </div>
            <div class="fellowship__body__references">
                <div class="fellowship__body____references__link">
                    <span>ico</span>
                    <a href="#">{fellowship.meetings[0].address}?</a>
                </div>
                <div class="fellowship__body____references__link">
                    <span>ico</span>
                    <a href="#">{fellowship.contact.number}?</a>
                </div>
                <div class="fellowship__body____references__link">
                    <span>ico</span>
                    <a href="#">{fellowship.contact.email}?</a>
                </div>
                <div class="fellowship__body____references__link">
                    <span>ico</span>
                    <a href="#">{social.link}</a>, <a href="#">{social.link}</a>, <a href="#">{social.link}</a>
                </div>
            </div>
        </div>
        <div class="fellowship__footer">
            <div class="fellowship__footer__action">
                <button class="button" ng-click="vm.closeFellowshipSingle()">Close</button>
            </div>
            <div class="fellowship__footer__action">
                <a href="#">Correction</a>
            </div>
        </div>
    </div>

</section>


<section class="find-fellow outer-container outer-container--no-padding">

    <?php include 'ship-list/ship-list.php'; ?>

</section>
*/ ?>

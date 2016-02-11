<header class="header">
    <div class="header__container outer-container">

        <h1 class="header__logo">
            <a href="/">
                <img src="assets/img/logo--with-title--cyan.svg"
                    alt="The Revival Fellowship logo"
                    class="header__logo__img">
            </a>
        </h1>

        <h2 class="header__tag">
            <img src="assets/img/title--one-fellowship-many-locations--colored--alt.svg"
                alt="One Fellowship Many Locations"
                class="header__tag__img header__tag__img--taller">
            <img src="assets/img/title--one-fellowship-many-locations--colored.svg"
                alt="One Fellowship Many Locations"
                class="header__tag__img header__tag__img--wider">
        </h2>

        <div class="header__actions" ng-show="vm.state.get() == 'default'">
            <button class="header__actions__button button button--stretch" ng-click="vm.useCurrentLocation()">Use Current Location</button>
            <button class="header__actions__button button button--stretch" ng-click="vm.listAllFellowships()">List All Fellowships</button>
        </div>

        <div class="header__country-map"></div>

    </div>
</header>

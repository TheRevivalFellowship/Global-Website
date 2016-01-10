# Global-Website
The central website for the whole fellowship.

## To set up build automation
- Run `vagrant up` to boot up VM
- Run `sudo npm install` from root directory
- Run `gulp` to begin watch and building
- Visit `http://192.168.33.10`


## Build tools requires
- Vagrant (vagrantup.com)
- NodeJS
- Gulp (`sudo npm install -g gulp`)

## Build tools will
- Compile, concatinate and compress SCSS
- Concatinate and uglify JS

## Code guidelines used
- http://cssguidelin.es
- https://github.com/johnpapa/angular-styleguide


## Changelog

### Sat 9th Jan 2016
 - Created `stateService` and implemented DOM elements transitioning between states using `ng-show/hide`.
 - Created `FellowshipsModel` service and hooked up to views.
 - Some basic styling.
 - Open/Close click toggling on regions.

Next steps: Style region, implement sub-region toggling.


## Todo

- Implement fonts as per Daniel's email.

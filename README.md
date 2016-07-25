# Global-Website
The central website for the whole fellowship.
---

# GUI DEV SETUP


---
# TECH DEV SETUP

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


## Git branching workflow
`master` -> `dev` -> `feature-xyz` -> `dev` -> `master`

 - **`master`** = Live on `production` and any `staging` servers.
 - **`dev`** = Live `dev` servers, merged back into `master`, default branch.
 - **`feature-xyz`** `local` branch off of `dev`, per feature, pull requested into `dev`, then deleted.

### Branch Naming convention
 - Developer's Initials - Feature and/or Purpose - Date created.
 - `BF-FixFellowshipFinderGeoLogic-22Apr16`


## Code guidelines used
- http://cssguidelin.es
- https://github.com/johnpapa/angular-styleguide


## Todo

StateManager service now in place, running through both styles and functionality top down.

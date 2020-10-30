# Introduction

This is a sample project to try out something different. My main purpose is: "Build a pipeline using":
* [+] Docker composer to start services
* Separate frontend and backend and use swagger for api definition (and maybe autogeranting server and client too?)
* Run tests after each commit
* Deploy it to somewhere?

I will try to focus on infrastructure a bit more then code.

# TODOs
* Have a db migration system?
* ORM?
* Make the api key security work
* Make a new nginx server for frontend?
* Docker multi-stage for production docker files

# Installation

## Prerequisites

* Docker
* OpenApiGenerator CLI (at least version 4.3). Can be installed by following those: https://openapi-generator.tech/docs/installation/. This one is used to generated the task api libraries and clients used in the slim framework.

## Backend

Running composer install to make sure all the required php libraries are installed
```
 cd ./backend && composer install
```

## Frontend

Run npm's install and build commands to install those
```
cd ./frontend && npm install && npm run build
```

### Updating swagger server libraries

```
./update-generated-libs.sh
```

The above code will regenerate the generate-lib directory based on the changes you amde to the openapi.yml file (of course some changes might be necessary on your code as well).s

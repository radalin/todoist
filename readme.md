# Introduction

This is a sample project to try out something different. My main purpose is:
* Build a pipeline using:
** Docker composer to start services
** Separate frontend and backend and use swagger for api definition (and maybe autogeranting server and client too?)
** Run tests after each commit
** Deploy it to somewhere

# Installation

## Prerequisites

* Docker
* OpenApiGenerator CLI (at least version 4.3). Can be installed by following those: https://openapi-generator.tech/docs/installation/. This one is used to generated the task api libraries and clients used in the slim framework.

## Backend

Running composer install to make sure all the required php libraries are installed
```
 cd ./backend && composer install
```

### Updating swagger server libraries

```
./update-generated-libs.sh
```

The above code will regenerate the generate-lib directory based on the changes you amde to the openapi.yml file (of course some changes might be necessary on your code as well).s

# Components
 I will not focus on the code architecture but on the infrastructure. Be able to start things from ground up. Therefore I need:
 * Docker Composer file definitions for services:
 ** Backend PHP service
 ** Database service
 ** Frontend service?
 * PHP Backend either a simple Slim framework or maybe plain old php with some customization
 * Database section that does not reset itself once the containers rebuilt.
 * Maybe build a simple frontend service as well to show a UI etc. I might make this built-in to backend site.
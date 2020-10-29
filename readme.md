# Introduction

This is a sample project to try out something different. My main purpose is:
* Build a pipeline using:
** Docker composer to start services
** Run tests after each commit
** Deploy it to somewhere


# Components
 I will not focus on the code architecture but on the infrastructure. Be able to start things from ground up. Therefore I need:
 * Docker Composer file definitions for services:
 ** Backend PHP service
 ** Database service
 ** Frontend service?
 * PHP Backend either a simple Slim framework or maybe plain old php with some customization
 * Database section that does not reset itself once the containers rebuilt.
 * Maybe build a simple frontend service as well to show a UI etc. I might make this built-in to backend site.


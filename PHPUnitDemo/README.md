## composer init

> $ composer init

```
Xinchin@Nelson MINGW64 /d/RD_Work/MyRepo/PSWebBE_200909/PHPUnitDemo (master)
$ composer init


  Welcome to the Composer config generator  



This command will guide you through creating your composer.json config.

Package name (<vendor>/<name>) [xinchin/php-unit-demo]: 
Description []: a sample demo
Author [xinchin@gmail.com <xinchin@gmail.com>, n to skip]: 
Invalid author string.  Must be in the format: John Smith <john@example.com>
Author [xinchin@gmail.com <xinchin@gmail.com>, n to skip]: Nelson Huang <xinchin@gmail.com>
Minimum Stability []: stable
Package Type (e.g. library, project, metapackage, composer-plugin) []: project
License []: proprietary

Define your dependencies.

Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? yes
Search for a package: phpunit

Found 15 packages matching phpunit

   [0] phpunit/phpunit 
   [1] phpunit/php-timer
   [2] phpunit/php-text-template 
   [3] phpunit/php-file-iterator
   [4] phpunit/php-code-coverage
   [5] phpunit/php-token-stream Abandoned. Use  instead.
   [6] phpunit/phpunit-mock-objects Abandoned. Use  instead.
   [7] symfony/phpunit-bridge
   [8] jean85/pretty-package-versions
   [9] phpunit/phpunit-selenium
  [10] johnkary/phpunit-speedtrap
  [11] codedungeon/phpunit-result-printer 
  [12] phpstan/phpstan-phpunit
  [13] codeception/phpunit-wrapper
  [14] brianium/paratest

Enter package # to add, or the complete package name if it is not listed:
Not a valid selection
Enter package # to add, or the complete package name if it is not listed: 0
Enter the version constraint to require (or leave blank to use the latest version): 
Using version ^8.5 for phpunit/phpunit
Search for a package: 

{
    "name": "xinchin/php-unit-demo",
    "description": "a sample demo",
    "type": "project",
    "require-dev": {
        "phpunit/phpunit": "^8.5"
    },
    "license": "proprietary",
    "authors": [
        {
            "name": "Nelson Huang",
            "email": "xinchin@gmail.com"
        }
    ],
    "minimum-stability": "stable",
    "require": {}
}

Do you confirm generation [yes]?
Would you like to install dependencies now [yes]? 
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 29 installs, 0 updates, 0 removals
  - Installing sebastian/version (2.0.1): Loading from cache
  - Installing sebastian/type (1.1.3): Loading from cache
  - Installing sebastian/resource-operations (2.0.1): Loading from cache
  - Installing sebastian/recursion-context (3.0.0): Loading from cache
  - Installing sebastian/object-reflector (1.1.1): Loading from cache
  - Installing sebastian/object-enumerator (3.0.3): Loading from cache
  - Installing sebastian/global-state (3.0.0): Loading from cache
  - Installing sebastian/exporter (3.1.2): Loading from cache
  - Installing sebastian/environment (4.2.3): Loading from cache
  - Installing sebastian/diff (3.0.2): Loading from cache
  - Installing sebastian/comparator (3.0.2): Loading from cache
  - Installing phpunit/php-timer (2.1.2): Loading from cache
  - Installing phpunit/php-text-template (1.2.1): Loading from cache
  - Installing phpunit/php-file-iterator (2.0.2): Loading from cache
  - Installing theseer/tokenizer (1.2.0): Loading from cache
  - Installing sebastian/code-unit-reverse-lookup (1.0.1): Loading from cache
  - Installing phpunit/php-token-stream (3.1.1): Loading from cache
  - Installing phpunit/php-code-coverage (7.0.10): Loading from cache
  - Installing doctrine/instantiator (1.3.1): Loading from cache
  - Installing phpdocumentor/reflection-common (2.2.0): Loading from cache
  - Installing symfony/polyfill-ctype (v1.18.1): Loading from cache
  - Installing webmozart/assert (1.9.1): Loading from cache
  - Installing phpdocumentor/type-resolver (1.3.0): Loading from cache
  - Installing phpdocumentor/reflection-docblock (5.2.1): Loading from cache
  - Installing phpspec/prophecy (1.11.1): Loading from cache
  - Installing phar-io/version (2.0.1): Loading from cache
  - Installing phar-io/manifest (1.0.3): Loading from cache
  - Installing myclabs/deep-copy (1.10.1): Loading from cache
  - Installing phpunit/phpunit (8.5.8): Loading from cache
sebastian/global-state suggests installing ext-uopz (*)
sebastian/environment suggests installing ext-posix (*)
phpunit/php-code-coverage suggests installing ext-xdebug (^2.7.2)
phpunit/phpunit suggests installing phpunit/php-invoker (^2.0.0)
phpunit/phpunit suggests installing ext-soap (*)
phpunit/phpunit suggests installing ext-xdebug (*)
Package phpunit/php-token-stream is abandoned, you should avoid using it. No replacement was suggested.
Writing lock file
Generating autoload files

Xinchin@Nelson MINGW64 /d/RD_Work/MyRepo/PSWebBE_200909/PHPUnitDemo (master)
$ 

```
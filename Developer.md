## Developer guide

### Working on project
This repo should be cloned in to the main Mautic project itself, 
it should be cloned into the plugins directory.

Each functionality should be implemented in form of Controllers with proper Namespaces, so 
we can easily USE the functionalities in other part of the code.

Guide can be taken from other plugin bundles, should in case one is not certain on how to go
about any implementation.

### How To Run Tests
* Start ddev (ddev start)
* execute each test by preceding it with ```ddev exec```
* Make sure you run the test from the Mautic root directory
* Your can also follow the main guide on the documentation
> [Mautic Unit Test(phpunit) documentation guide](https://contribute.mautic.org/contributing-to-mautic/developer/code/pull-requests#step-9-testing)

Example:
```shell
ddev exec bin/phpunit --bootstrap vendor/autoload.php --configuration app/phpunit.xml.dist   plugins/MauticCampAfricaBundle/Tests/Entity/MauticCampAfricaRegistrationTest.php
```
The above test will run the test in the Tests/Entity/MauticCampAfricaRegistrationTest.php

### How To Create Migration
```shell
ddev exec php bin/console doctrine:migrations:diff
```

### To Check Mysql from terminal 
```shell
ddev mysql
```

### How to clear the cache of the environment your are working in
```shell
 ddev exec php bin/console cache:clear --env=test
```

### How to dump-autoload
```shell
ddev exec composer dump-autoload
```



<p align="center"><a href="http://survos.herokuapps.com" target="_blank">
    <img src="https://survos.com/logos/survos.svg">
</a></p>

[Survos][1] provides a set of [Symfony bundles][2] to faciliate rapid development of Symfony applications, and a set of demos and projects that demonstrate how those bundles can be configured and used.  Many of the bundles expose [Twig Components][xx] and Twig functions and filters.

Although the bundles often work together, they can be used independently.  SurvosBootstrapBundle is an opinionated way to quickly integrated Bootstrap with several Twig Components and implementing the Sneat theme.  It leverages KnpMenuBundle to populate the sidebar, navbar, page header and footer.  See the [Build A Real Website in 10 minutes] tutorial.  Although no bundles have bootstrap-bundle as a dependent, some visually-oriented bundles, like grid-bundle and tree-bundle, require Boostrap to render as intended.  Not surprisingly, all the demos and projects use bootstrap-bundle/

## Bundles and Dependencies

* simple-datatables-bundle: 

### Dokku

dokku config:set DATABASE_URL=postgresql://postgres:y5q5n6mX2EBebVb@5.161.107.103:5432/kpa?serverVersion=16
dokku config:set MEILI_API_KEY=Y0urVery-S3cureAp1K3y
dokku config:set MEILI_SERVER=http://dokku.survos.com:7700/
dokku config:set SENTRY_DSN=https://23af3e73d7d52cc68c42ea54dfa1811d@o13782.ingest.sentry.io/4506240906166272

DOKKU_APP_RESTORE:  1
DOKKU_APP_TYPE:     herokuish
DOKKU_PROXY_PORT:   80
GIT_REV:            8f61e59939797be88d658097bbd06ece48d3037b
SENTRY_DSN:         https://23af3e73d7d52cc68c42ea54dfa1811d@o13782.ingest.sentry.io/4506240906166272

Demos
-----

See the bundles in actions, and/or build them locally, with these demos (using bootstrap-bundle)


* [sneat-demo](https://github.com/survos/bootstrap-bundle-demo) faker, auth. <a target="_blank" href="https://sneat-demo.herokuapp.com/">Demo</a>
* [tree-demo](https://github.com/survos/dt-demos) tree, auth [Demo](https://tree-bundle-demo.herokuapp.com/)
* [grid-demo](https://github.com/survos/dt-demos) grid, api-grid [Demo](https://survos-grid-demo.herokuapp.com/)


Getting Started
---------------

* Install Symfony 6.1+
* Install webpack-encore, so that stimulus components work, and run yarn install

A collection of bundles to faciliate rapid development of Symfony applications.

You'll find all packages in [`/packages`](/packages) directory. Here is a brief overview (tip: click on the package name to see its `README` with more detailed features):

Key Bundles
-------------

These are the bundles used in all the demo and open-source projects built by Survos:
 
* [bootstrap-bundle][7] for a beautiful front end.
* Install [maker-bundle --dev] to rapidly create classes and templates.

Power Bundles
-------------

These bundles are used in most applications because they provide utility that is commonly needed.

* [grid-bundle](packages/grid-bundle/README.md) display static tabular data that fits in memory using [DataTables](https://datatables.net/)
* [api-grid-bundle](packages/api-grid-bundle/README.md) display tabular data of Doctrine entities using [DataTables](https://datatables.net/).  Data is loaded via AJAX using ApiPlatform, so developers can integrate a searchable, sortable, infinite-scroll table with just a few lines of code.
* [tree-bundle](packages/tree-bundle/README.md) Use [Gedmo] and API Platform to display and modify hierarchical data.

Other Bundles
-------------

These special-purpose bundles are easy to integrate for projects that need them.

* [faker-bundle](packages/faker-bundle/README.md) exposes faker-php methods via twig.
* [barcode-bundle](packages/barcode-bundle/README.md) generate SVG barcodes in twig (thin wrapper forpicqer/php-barcode-generator).

Utility Bundles
---------------

These bundles are used by other bundles (when functionality is shared), but aren't necessary to include directly in the projects.

* [inspection-bundle](packages/inspection-bundle/README.md) Inspects entities to dynamically determine which fields are searchable and sortable.  Also exposes twig methods for generating ApiPlatform links to get and update entities (api-grid and api-tree components use these).
* [core-bundle](packages/core-bundle/README.md) Utilities to facilitate queries and route parameters.  Used frequently in our demo projects.

Under Development
------------------

These bundles are usable, but not ready for prime-time.

* [doc-bundle](packages/doc-bundle/README.md) Write your documentation in twig and generate Sphinx documentation.
* [auth-bundle](packages/auth-bundle/README.md) Rapidly integrate authentication, including social media login (built on top of Symfony security-bundle and knp/oauth2).


## Coding Standards

- [Bootstrap](https://github.com/survos/bootstrap-bundle)
- [Tree](https://github.com/survos/tree-bundle)

[1]: https://survos.com
[2]: https://symfony.com/packages
[3]: https://symfony.com/doc/current/reference/requirements.html


```bash
symfony new unused-bug --webapp && cd unused-bug
bin/console make:controller AppController
sed -i 's|"type"|"name": "survos/bug", "description": "demo of a bug" , "type"|' composer.json
composer req knplabs/knp-time-bundle
sed -i "s|/app|/|" src/Controller/AppController.php 

cat <<'EOF' > templates/app/index.html.twig
{% extends 'base.html.twig' %}
{% block body %}
{{ "now"|date("m/d/Y")|ago }}
{% endblock %}
EOF

#echo "{{ 'test'|barcode }} or {{ barcode('test', 2, 80, 'red') }} " >> templates/app/index.html.twig
symfony server:start -d
symfony open:local

curl -OL https://github.com/composer-unused/composer-unused/releases/latest/download/composer-unused.phar
php composer-unused.phar
```

## Ignore dump in production

symfony new ignore-dump-in-production --webapp && cd ignore-dump-in-production
bin/console make:controller AppController
sed -i "s|/app|/|" src/Controller/AppController.php

cat <<'EOF' > templates/app/index.html.twig
{% extends 'base.html.twig' %}
{% block body %}
    {% guard function dump  %}
    {{ dump() }}
    {% else %}
    dump cannot be used in production
    {% endguard %}
{% endblock %}
EOF

symfony server:start -d
symfony open:local

sed -i "s|APP_ENV=dev|APP_ENV=prod|" .env
bin/console cache:clear
symfony open:local

sed -i "s|APP_ENV=prod|APP_ENV=dev|" .env
symfony open:local
composer require --dev pierstoval/smoke-testing




bin/console make:controller App

cat <<'EOF' > templates/app/index.html.twig
{% extends 'base.html.twig' %}
{% block body %}
{{ sparkline([2,3,10,8,23,14,9,12,0,0,14])|raw }}
{% endblock %}
EOF

composer require --dev pierstoval/smoke-testing
cat <<'EOF' > tests/AllRoutesTest.php
<?php

namespace App\Tests;
use Pierstoval\SmokeTesting\SmokeTestStaticRoutes;

class AllRoutesTest extends SmokeTestStaticRoutes
{
    // That's all!
}
EOF

vendor/bin/phpunit


SYMFONY_DEPRECATIONS_HELPER='disabled=1' vendor/bin/phpunit

## Worth Reading

* https://matemarschalko.medium.com/28-javascript-one-liners-every-senior-developer-needs-to-know-e74bdedc3b3b


## Continuous Integration

https://github.com/yokai-php/safe-command-bundle has a next way to handle tests

## Candidates for Symfony 7

* https://github.com/yipikai-studio/geolocation-bundle/blob/1.0/composer.json

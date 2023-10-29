fDemo for survos/grid-bundle

## Quick Start: Download and run
git clone git@github.com:survos/grid-demo

## Recreate

```bash
symfony new grid-demo --webapp && cd grid-demo
composer req api symfony/webpack-encore-bundle
yarn install && yarn dev

echo "DATABASE_URL=sqlite:///%kernel.project_dir%/var/data.db" > .env.local
composer require orm-fixtures --dev 

yarn add bootstrap @popperjs/core
```

## Create the entities 

[Create The Entity Classes](docs/01-create-entities.md)

```
composer require orm-fixtures --dev       
bin/console make:fixtures CongressFixtures

See the Fixtures file.
bin/console doctrine:fixtures:load -n 
```

## Symfony Crud

Checkout a new branch for testing with Symfony CRUD.  Although it's a fast and easy way to get up and running, especially if you already have controllers and templates created, it's not the best way for new projects.  

```bash
git checkout -b using-symfony-crud
echo "Official,CongressController,no" | sed "s/,/\n/g"  | bin/console make:crud
symfony server:start -d
sed -i "s|/congress')]|/')]|" src/Controller/CongressController.php
symfony open:local
```

## Prep for DataTablesBundle Installation

There's a bit of chicken and egg here -- the datatables bundle requires FOS Js Routing

```bash
composer require friendsofsymfony/jsrouting-bundle
bin/console fos:js-routing:dump --format=json --target=public/js/fos_js_routes.json

composer req survos/datatables-bundle
```

## Using the bundle

There are several ways to use the bundle.  

If you already have an HTML table with a header and body (thead and tbody), then you can simply attach a stimulus controller.  In this case, Symfony CRUD generator has done then, so just open official/index.html.twig and attach the controller to the table element.

@todo: sed -i "s|/congress')]|/')]|" src/Controller/CongressController.php

    <table class="table" {{ stimulus_controller('@survos/datatables-bundle/datatables') }}>

Now if we go back and add fields to the entity, we have to edit this file and add a new row heading PLUS the new row data.  If we want to re-order the columns, or remove some, we have two places to do that, making it somewhat error-prone.

So the next way to use the bundle is to generate the datable from the data.  Change congress/index.html.twig to 
```twig
    {% component datatable with {
        data: officials,
        columns: ['id', 'officialName', 'lastName']
    } %}
    {% endcomponent %}
```

Now, what about actions?  To generate a custom column, simply create a block in the component with the same name:

    {% component datatable with {
        data: officials,
        columns: ['id', 'actions', 'lastName']
    } %}

        {% block actions %}
            <a href="{{ path('app_congress_show', {'id': row.id}) }}">show</a>
            <a href="{{ path('app_congress_edit', {'id': row.id}) }}">edit</a>
        {% endblock %}

    {% endcomponent %}


Similarly, we can overwrite other columns.  Let's get limit the edit to admins only, and the link to 'show' on the name, and show the birthday properly formatted.

    {% component datatable with {
        data: officials,
        columns: ['id', 'officialName']|merge(is_granted('ROLE_ADMIN')?['actions']:['birthday'])
    } %}

        {% block officialName %}
        <a href="{{ path('app_congress_show', {'id': row.id}) }}">
            {{ row.officialName }}
        </a>
        {% endblock %}

        {% block birthday %}
            {{ row.birthday|date('Y-m-d') }}
        {% endblock %}

        {% block actions %}
            <a href="{{ path('app_congress_edit', {'id': row.id}) }}">edit</a>
        {% endblock %}

    {% endcomponent %}

Now, this is all great if the data fits in memory, and provides filtering and sorting, but what about if it doesn't?  Fortunately, API Platform gives us an easy way to configure the hard part.

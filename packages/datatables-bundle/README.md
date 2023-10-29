# Survos Simple Datatables Bundle

Integrate the Datatables library from https://datatables.net as a stimulus component.


```bash
composer req survos/datatables-bundle
```

## 

## Complete project
```bash
symfony new datatables-demo --webapp --version=next && cd datatables-demo
# composer config minimum-stability dev
# composer config prefer-stable true
composer req symfony/asset-mapper
composer req symfony/stimulus-bundle:2.x-dev
../lb.sh datatables
# composer req survos/datatables-bundle
# bin/console importmap:require bootstrap
bin/console make:controller AppController
sed -i "s|Route('/app'|Route('/'|" src/Controller/AppController.php

cat > templates/app/index.html.twig <<END
{% extends 'base.html.twig' %}

{% block body %}
     <table class="table" {{ stimulus_controller('@survos/datatables-bundle/table', {perPage: 5, sortable: true}) }}>
        <thead>
        <tr>
            <th>abbr</th>
            <th>name</th>
            <th>number</th>
        </thead>
        <tbody>
        {% for j in 1..12 %}
            <tr>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('M') }}</td>
                <td>{{ j |date('2023-' ~ j ~ '-01') |date('F') }}</td>
                <td>{{ j }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endblock %}
END
symfony server:start -d
symfony open:local
```

## Ideas

Import the datasets at https://domohelp.domo.com/hc/en-us/articles/360043931814-Fun-Sample-DataSets
https://www.mytechylife.com/2015/09/29/next-and-previous-row-with-jquery-datatables/
https://github.com/lerocha/chinook-database
http://2016.padjo.org/tutorials/sqlite-data-starterpacks/#more-info-simplefolks-for-simple-sql

# Dev only...

composer config repositories.survos_grid_bundle '{"type": "vcs", "url": "git@github.com:survos/SurvosSimpleDatatablesBundle.git"}'


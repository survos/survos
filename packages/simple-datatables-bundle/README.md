# Survos Simple Datatables Bundle

Integrate the Simple Datatables library from https://github.com/fiduswriter/simple-datatables/ as a stimulus component.


```bash
composer req survos/simple-datatables-bundle
```

## Add the stimulus controller

To change any html table into a datatable, simple add the stimulus controller to the tag

```twig
     <table class="table" {{ stimulus_controller('@survos/simple-datatables-bundle/table', {perPage: 5, sortable: true}) }}>
```


## Complete Project

Cut and paste to create an new Symfony project with a dynamic, searchable datatable, without writing a single line of Javascript!  No webpack or build step either.

```bash
symfony new simple-datatables-demo --webapp  && cd simple-datatables-demo
rm .git -rf
composer config extra.symfony.allow-contrib true
composer req survos/simple-datatables-bundle 

bin/console make:controller Simple -i
cat > templates/simple.html.twig <<END
{% extends 'base.html.twig' %}

{% block body %}
     <table class="table" {{ stimulus_controller('@survos/simple-datatables-bundle/table', {perPage: 5, sortable: true}) }}>
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
symfony open:local --path=/simple
```

Or even easier, use the twig component. To simplify the example we're going to add the fetch and json_decode functions to twig, normally that would be done in the controller, but the cut and paste is faster this way.

```bash
composer require zenstruck/twig-service-bundle
cat > config/packages/zenstruck_twig_service.yaml <<END
zenstruck_twig_service:
  functions:
    fetch: file_get_contents # available as "fn_fetch()" in twig
    json_decode: json_decode
END

cat > templates/simple.html.twig <<'END'
{% extends 'base.html.twig' %}

{% block body %}
    {% set columns = [
        {name: 'id'},
        {name: 'title', title: 'name'},
        'brand',
        'price'
    ] %}
    <twig:simple_datatables
            perPage="20"
            :caller="_self"
            :columns="columns"
            :data="fn_json_decode(fn_fetch('https://dummyjson.com/products')).products"
    >
        <twig:block name="price">
            ${{ row.price|number_format(2) }}
        </twig:block>

    </twig:simple_datatables>
{% endblock %}
END
symfony server:start -d
symfony open:local --path=/simple
    
```


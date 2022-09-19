# FakerBundle [READONLY]

Split of mono


Symfony Bundle for fakerphp/faker, exposes many of the formatters in twig.

```bash
composer req survos/faker-bundle
```

```twig

<ul>
{% for i in 1..10 %}
<li>{{ name() }}, {{ company() }}</li>
{% endfor %} 
</ul>

```

By default, the data will change with every page refresh.  To keep it consistent, change the seed.
If the twig function names interfere with another twig function, set a prefix, e.g. fake_name().

```yaml
# config/packages/faker.yaml
survos_faker:
  seed: 42
  prefix: fake_
```

You can also set the seed in a twig file, via the faker_set_seed() function.

```bash
symfony new FakerDemo --webapp
yarn install 
bin/console make:controller AppController
composer req survos/faker-bundle
echo "{{ name() }}" > templates/app/index.html.twig
symfony server:start -d
```

and go to /app

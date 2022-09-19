# FakerBundle [READONLY]

Split of mono


Symfony Bundle for fakerphp/faker, exposes many of the formatters in twig.

```bash
composer req survos/faker-bundle
```

```twig

<ul>
{% for i in 1..10 %}
<li>{{ person_name() }}, {{ company_company() }}</li>
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
yarn install

```bash
symfony new FakerDemo --webapp && cd FakerDemo
bin/console make:controller AppController
sed  -i "s|'/app'|'/'|" src/Controller/AppController.php # the landing page controller
composer req survos/faker-bundle
echo "<ul> {% for i in 0..10 %} <li>{{ person_name() }} <u>{{ internet_email() }}</u> <br />  <i>{{ company_jobTitle() }}</i>, {{ company_company() }}  </li>{% endfor %}</ul>" > templates/app/index.html.twig
symfony server:start 
```

now open the site.  Each refresh generates different results.  To make the results consistent, set a seed.

```bash
echo "survos_faker: {seed: 1}" > config/packages/survos_faker.yaml
bin/console cache:clear
symfony server:start
```


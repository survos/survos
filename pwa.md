symfony new pwa-demo --webapp --php=8.2 && cd pwa-demo
composer config extra.symfony.allow-contrib true
composer req symfony/stimulus-bundle

bin/console make:controller AppController
sed -i "s|Route('/app'|Route('/'|" src/Controller/AppController.php
sed -i "s|'app_app'|'app_homepage'|" src/Controller/AppController.php
cat > templates/app/index.html.twig <<END
{% extends 'base.html.twig' %}
{% block body %}

<h1>A simple CRUD</h1>
<a href="{{ path('app_official_index') }}">Listing</a>
{% endblock %}
END

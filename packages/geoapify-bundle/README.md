# Geoapify Bundle

Symfony Bundle to access the API at https://www.geoapify.com/ 

The geoapify website offers 3000 free lookups per day, and it's very fast and easy to register for an API key.  The main purpose of this bundle is to simplify storing the API key in an environment variable and to cache the responses.

First, get an API key at https://myprojects.geoapify.com/projects and add it to .env.local

```bash
echo "GEOAPIFY_API_KEY=my-api-key" >> .env.local
composer req survos/geoapify-bundle
bin/console debug:config survos_geoapify --format=yaml > config/packages/survos_geoapify.yaml

```

```yaml
# config/packages/survos_geoapify.yaml
survos_geoapify:
  api_key: '%env(GEOAPIFY_API_KEY)%'
```



## Trivial but functional application

Requirements:

* Locally installed PHP 8
* Symfony CLI
* sed (to change /app to / without opening an editor)
* API Key 

```bash
symfony new GeoapifyDemo --webapp && cd GeoapifyDemo
echo "GEOAPIFY_API_KEY=my-api-key" >> .env.local
symfony composer req survos/geoapify-bundle
symfony console make:controller AppController
sed -i "s|/app|/|" src/Controller/AppController.php 

cat <<'EOF' > templates/app/index.html.twig
{% extends 'base.html.twig' %}
{% block body %}
{% set ip = app.request.clientIp %}
{{ isLocalhost(ip) ? "<div>Localhost has no geolocation, using value from config</div>" }}
Hello, visitor from {{ ipGeolocation(ip).country_name}} )
<pre>{{ ipGeolocation(ip)|json_encode(constant('JSON_PRETTY_PRINT')) }}</pre>

Powered by Geoapify.com <a href="https://www.geoapify.com">IP geolocation</a> web service.

{% endblock %}
EOF

symfony server:start -d
symfony open:local
```

## Notes

https://freeipapi.com/ is a free service that can be used without an API key (up to 60 requests per minute).  

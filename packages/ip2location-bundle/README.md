# Ip2Location Bundle

Symfony Bundle for the [ip2location/ip2location-io-php](https://github.com/ip2location/ip2location-io-php) library, to get data from an IP address.

First, get an API key at https://www.ip2location.io/pricing

```bash
composer req survos/ip2location-bundle
```

```twig

{# as a function #}
{{ ip2location(app.request.clientIp).country_code}}

```

By default, the bundle gets the API key from the environment
```yaml
# config/packages/survos_ip2location.yaml
survos_ip2location:
  api_key: %env(IP2LOCATION_API_KEY)%
```

## Proof that it works

Requirements:

* Locally installed PHP 8
* Symfony CLI
* sed (to change /app to / without opening an editor)


```bash
symfony new Ip2locationDemo --webapp && cd Ip2locationDemo
symfony composer req survos/ip2location-bundle
syfmony console make:controller AppController
sed -i "s|/app|/|" src/Controller/AppController.php 

echo "IP2LOCATION_API_KEY=my-api-key" >> .env.local

cat <<'EOF' > templates/app/index.html.twig
{% extends 'base.html.twig' %}
{% block body %}
{{ ip2location(app.request.clientIp).country_code}}
{% endblock %}
EOF

symfony server:start -d
symfony open:local
```

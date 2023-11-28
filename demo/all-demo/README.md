

sed  -i "s|APP_SECRET|# APP_SECRET|" .env


composer config repositories.symfony_maker_bundle '{"type": "path", "url": "/home/tac/g/tacman/maker-bundle"}'
composer req symfony/maker-bundle:*@dev

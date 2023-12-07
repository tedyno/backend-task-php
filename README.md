## Backend task

To install deps

> docker run --rm \   
-u "$(id -u):$(id -g)" \
-v $(pwd):/var/www/html \
-w /var/www/html \
laravelsail/php82-composer:latest \
composer install --ignore-platform-reqs

To run app

> ./vendor/bin/sail up

To run seeders

> ./vendor/bin/sail php artisan db:seed


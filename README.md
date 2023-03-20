Устанавливаем зависимости:

`docker run --rm -it -v $PWD:/app composer install`

Запускаем скрипт:

`docker run --rm -it  -v $PWD:/app -w="/app" php:8.2 php index.php`
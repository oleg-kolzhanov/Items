Устанавливаем зависимости:

`docker run --rm -i --tty -v $PWD:/app composer install`

Запускаем скрипт:

`docker run --rm -it  -v .:/app -w="/app" php:8.2 php index.php`
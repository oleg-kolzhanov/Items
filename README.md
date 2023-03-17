Устанавливаем зависимости:

`docker run --rm --interactive --tty --volume $PWD:/app composer install`

Запускаем скрипт:

`docker run --rm -it  -v .:/app -w="/app" php:8.2 php index.php`
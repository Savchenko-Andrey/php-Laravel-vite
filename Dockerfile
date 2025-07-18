FROM php:8.2-fpm

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN apt-get update && apt-get install -y \
  git curl zip unzip libzip-dev libpng-dev libonig-dev \
  libxml2-dev npm nodejs gnupg

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

RUN chmod +x artisan \
  && composer install --no-interaction --prefer-dist --optimize-autoloader

RUN npm install && npm run build

RUN mkdir -p database && touch database/database.sqlite

RUN cp .env.example .env \
  && php artisan key:generate \
  && php artisan migrate --force

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=$PORT

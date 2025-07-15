FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
  git curl zip unzip libzip-dev libpng-dev libonig-dev \
  libxml2-dev npm nodejs gnupg

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www
COPY . .

RUN composer install --no-interaction --prefer-dist --optimize-autoloader

RUN npm install && npm run build

# 🔧 Створюємо порожню SQLite базу, щоб уникнути помилки
RUN mkdir -p database && touch database/database.sqlite

# Копіюємо .env і генеруємо ключ
RUN cp .env.example .env \
  && php artisan key:generate

RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 8000

CMD php artisan serve --host=0.0.0.0 --port=$PORT

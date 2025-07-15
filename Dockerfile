FROM php:8.2-fpm

# Установка зависимостей
RUN apt-get update && apt-get install -y \
  git curl zip unzip libzip-dev libpng-dev libonig-dev \
  libxml2-dev npm nodejs gnupg

# Установка Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Установка рабочей директории
WORKDIR /var/www

# Копируем только файлы зависимостей для кэширования
COPY composer.json composer.lock ./
COPY package.json package-lock.json ./

# Устанавливаем зависимости
RUN composer install --no-interaction --prefer-dist --optimize-autoloader
RUN npm install

# Копируем оставшийся код проекта
COPY . .

# Билд front-end
RUN npm run build

# Создание SQLite файла (если используешь SQLite)
RUN mkdir -p database && touch database/database.sqlite

# Генерация ключа и миграции
RUN cp .env.example .env \
  && php artisan key:generate \
  && php artisan migrate --force

# Права на кэш и сторедж
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Открываем порт
EXPOSE 8000

# Запускаем Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT

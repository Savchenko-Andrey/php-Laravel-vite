# 1. Базовий PHP-образ з розширеннями
FROM php:8.2-fpm

# 2. Встановлюємо залежності системи
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libpng-dev libonig-dev \
    libxml2-dev npm nodejs gnupg

# 3. Встановлюємо Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4. Копіюємо проект у контейнер
WORKDIR /var/www
COPY . .

# 5. Встановлюємо залежності Laravel
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# 6. Встановлюємо залежності Vite
RUN npm install && npm run build

# 7. Генеруємо APP_KEY
RUN php artisan key:generate

# 8. Встановлюємо права (якщо потрібно)
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# 9. Порт для Laravel (на Render він автоматично використовує $PORT)
EXPOSE 8000

# 10. Запуск Laravel через вбудований сервер
CMD php artisan serve --host=0.0.0.0 --port=$PORT

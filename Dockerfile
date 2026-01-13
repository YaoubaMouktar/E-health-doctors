FROM php:8.2-fpm

WORKDIR /var/www/html

# Installer les dépendances système
RUN apt-get update && apt-get install -y \
    curl \
    git \
    libpq-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd xml \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copier les fichiers du projet
COPY . .

# Corriger la propriété Git
RUN git config --global --add safe.directory /var/www/html

# Créer le fichier .env s'il n'existe pas
RUN if [ ! -f .env ]; then \
    if [ -f .env.example ]; then \
        cp .env.example .env; \
    else \
        printf "APP_NAME=E-health-Doctors\nAPP_ENV=local\nAPP_DEBUG=true\nAPP_URL=http://localhost:8000\nDB_CONNECTION=mysql\nDB_HOST=firstubn-mysql\nDB_PORT=3306\nDB_DATABASE=ehealthdb\nDB_USERNAME=root\nDB_PASSWORD=root\nCACHE_DRIVER=file\nSESSION_DRIVER=file\nQUEUE_CONNECTION=sync\nREDIS_HOST=ehealth-doctors-redis\nREDIS_PASSWORD=null\nREDIS_PORT=6379\n" > .env; \
    fi \
fi

# Supprimer composer.lock pour réinstaller avec les bonnes versions
RUN rm -f composer.lock

# Installer les dépendances Composer
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install \
    --no-interaction \
    --optimize-autoloader \
    --prefer-dist

# Générer la clé d'application
RUN php artisan key:generate --force || true

# Créer les répertoires nécessaires
RUN mkdir -p storage/logs storage/app storage/app/public storage/framework storage/framework/cache storage/framework/sessions storage/framework/views
RUN mkdir -p bootstrap/cache
RUN mkdir -p public/storage

# Ajuster les permissions pour www-data
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html/storage
RUN chmod -R 775 /var/www/html/bootstrap/cache
RUN chmod -R 755 /var/www/html/public

EXPOSE 9000

CMD ["php-fpm"]
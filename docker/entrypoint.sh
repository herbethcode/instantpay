#!/bin/sh
set -e

cd /var/www/html

# All configuration comes from process environment variables (12-factor style),
# no .env file is baked into or written inside the image.
if [ -z "$APP_KEY" ]; then
    echo "WARNING: APP_KEY is not set - generating a temporary one for this run."
    echo "Set a persistent APP_KEY in your .env so sessions/encrypted data survive restarts."
    export APP_KEY
    APP_KEY=$(php artisan key:generate --show)
fi

# Wait for the database to accept connections before migrating
if [ -n "$DB_HOST" ]; then
    echo "Waiting for database at ${DB_HOST}:${DB_PORT:-3306}..."
    until php -r "new PDO('mysql:host=${DB_HOST};port=${DB_PORT:-3306}', '${DB_USERNAME}', '${DB_PASSWORD}');" 2>/dev/null; do
        sleep 2
    done
fi

php artisan storage:link --force || true
php artisan migrate --force

php artisan config:cache
php artisan route:cache
php artisan view:cache

exec "$@"

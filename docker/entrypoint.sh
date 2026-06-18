#!/bin/sh
set -e

until php -r "exit(@fsockopen('${DB_HOST:-db}', ${DB_PORT:-3306}) ? 0 : 1);"; do
  echo "Waiting for database at ${DB_HOST:-db}:${DB_PORT:-3306}..."
  sleep 2
done

php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan migrate --force
php artisan storage:link --force || true

exec "$@"

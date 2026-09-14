#!/usr/bin/env bash
set -e

php artisan optimize:clear
php artisan migrate
php artisan route:list

echo "MVC wedding project ready. Jalankan: php artisan serve"

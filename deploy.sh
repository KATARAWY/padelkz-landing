#!/usr/bin/env bash
# Обновление на сервере: забрать main, поставить зависимости, прогнать миграции, прогреть кэш
set -euo pipefail
cd "$(dirname "$0")"

git pull --ff-only origin main
composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
php artisan migrate --force
php artisan optimize

echo "готово: $(git log -1 --format='%h %s')"

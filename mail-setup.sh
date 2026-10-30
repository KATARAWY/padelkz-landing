#!/usr/bin/env bash
# Включает письма о заявках через Gmail. Пароль вводится с клавиатуры и попадает только в .env.
# Нужен «пароль приложения» Google: myaccount.google.com/apppasswords (у аккаунта должна быть включена 2FA).
set -euo pipefail
cd "$(dirname "$0")"

read -rp "Gmail, с которого слать письма: " user
read -rsp "Пароль приложения (16 букв, ввод не видно): " pass; echo
pass=${pass// /}

# заменить строку KEY= в .env или дописать её; пишем поверх файла, чтобы сохранить владельца и права
set_env() {
    local tmp; tmp=$(mktemp)
    awk -v k="$1" -v v="$2" 'index($0, k "=") == 1 { print k "=" v; done = 1; next } { print } END { if (!done) print k "=" v }' .env > "$tmp"
    cat "$tmp" > .env
    rm -f "$tmp"
}
set_env MAIL_MAILER smtp
set_env MAIL_HOST smtp.gmail.com
set_env MAIL_PORT 587
set_env MAIL_USERNAME "$user"
set_env MAIL_PASSWORD "$pass"
set_env MAIL_FROM_ADDRESS "$user"

php artisan config:cache > /dev/null
php artisan lead:mail-test

# padelkz.kz — лендинг CRM Padel KZ

Laravel 12. Одна страница (`/`) и приём заявок с формы (`POST /lead`).

## Где что

- `resources/views/landing.blade.php` — страница. Собирается из исходника лендинга, руками лучше не править:
  при следующей пересборке правки затрутся.
- `public/img`, `public/fonts`, `public/favicon.ico` — картинки, шрифт Onest, иконка.
- `app/Http/Controllers/LeadController.php` — приём заявки: проверка полей, запись в таблицу `leads`,
  уведомление в Telegram, если задан бот.
- `config/landing.php` — куда идут заявки, значения берутся из `.env`.
- SEO: разметка JSON-LD (организация, CRM, приложение, FAQ) в `<head>` страницы; `public/robots.txt`
  открывает сайт поисковикам и AI-ботам (ChatGPT, Perplexity, Claude, Gemini, Яндекс), `public/sitemap.xml`,
  `public/llms.txt` — описание продукта для нейросетей. Поменялся текст на странице — поправь `llms.txt`
  и FAQ в JSON-LD, иначе нейронки будут пересказывать старое. `public/c176d0….txt` — ключ IndexNow.

## Заявки

Форма шлёт JSON `{ name, club, phone, page }` на `/lead`, не чаще 5 раз в минуту с одного IP.
Заявка сохраняется в `leads` (SQLite, `database/database.sqlite`). Если сервер не ответил,
форма открывает WhatsApp с готовым текстом, чтобы заявка не потерялась.

Настройки в `.env`:

| переменная | что это |
|---|---|
| `LANDING_WHATSAPP` | номер для WhatsApp, только цифры: `77001234567` |
| `LANDING_TELEGRAM` | ник без @, появится кнопка «Написать в Telegram» |
| `LEAD_TELEGRAM_BOT_TOKEN`, `LEAD_TELEGRAM_CHAT_ID` | бот, который пришлёт заявку в чат |

После правки `.env` на сервере: `php artisan config:cache`.

Посмотреть заявки: `php artisan tinker --execute 'dump(App\Models\Lead::latest()->get()->toArray())'`.

## Запуск локально

```bash
composer install
cp .env.example .env
php artisan key:generate
touch database/database.sqlite
php artisan migrate
php artisan serve
```

## Выкладка на сервер

На сервере проект лежит в `/var/www/padelkz`, обновление одной командой:

```bash
cd /var/www/padelkz && ./deploy.sh
```

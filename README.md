# Caretaz Healthcare — Laravel 11

Production-ready Laravel 11 + Blade conversion of the Caretaz Healthcare static site.

## Local (XAMPP)

- URL: http://localhost/care-taz
- PHP 8.2+, MySQL, Apache with `mod_rewrite`
- Root `.htaccess` rewrites into `public/`; `public/index.php` adjusts `SCRIPT_NAME` for subdirectory routing

```bash
composer install
cp .env.example .env   # only if .env does not exist
php artisan key:generate   # local only — never on production
# Create DB: care_taz (utf8mb4), user root / empty password typical for XAMPP
php artisan migrate --seed
```

Admin: username `admin` / password `CHANGE_ME`  
Admin URL: http://localhost/care-taz/admin/login

## Stack notes

- Sessions / cache / queue: **file** / file / sync (not database sessions)
- Contact form: AJAX + CSRF + `mews/captcha` (math image)
- Admin tables: Yajra DataTables
- Blog: full admin CRUD; public `/blog` exists for admin “View” but is **not** in header, footer, or homepage
- Static reference HTML kept in `ui-design/`
- Assets live in `public/css`, `public/js`, `public/assets`
- `versioned_asset()` appends `?v=filemtime` for cache-busting

## Production deploy (Hostinger VPS / similar)

App path example: `/var/www/care-taz` — Nginx `root` = `public/`

After `git pull` as root:

```bash
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache && php artisan route:cache && php artisan view:cache
chown -R www-data:www-data storage bootstrap/cache public/uploads
chmod -R ug+rwx storage bootstrap/cache public/uploads
```

Do **not**:
- run `key:generate` on production
- overwrite production `.env` with `.env.example`
- expose MySQL on the public internet (use SSH tunnel / TablePlus)
- leave Blog in the public menu

Production `.env`: `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://…`, file session/cache, dedicated MySQL user (escape `_` carefully in GRANT).

# Kök Tengri

Bu depo, Laravel 13 ve FilamentPHP 5 için ayrı ve güvenli bir başlangıç şablonunu içerir.

## Yüklenen sürüm hedefi

- Laravel: `^13.0`
- FilamentPHP: `^5.0`
- PHP: `^8.3`

## Notlar

- Bu işlem, merge veya canlıya dağıtım yapmadan yalnızca GitHub deposu hazırlama amaçlıdır.
- Proje hazırlanırken sürüm uyumluluğu `composer.json` bağımlılıkları üzerinden doğrulanmıştır.
- Testler, temel sağlık kontrolü ve Filament admin giriş sayfası erişimini doğrular.

## Kullanım

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan test
```

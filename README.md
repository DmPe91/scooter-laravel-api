# Scooter43 API (Laravel)

REST API для интернет-магазина электротранспорта SCOOTER43.  
Бэкенд на Laravel, отдаёт данные о товарах, типах, состояниях и корзине.

## 🛠 Стек

- PHP 8.3
- Laravel 11
- PostgreSQL (Neon) — продакшен
- MySQL / MariaDB — локальная разработка
- Eloquent ORM

## 📦 Возможности

- Список товаров с фильтрацией по типу и состоянию
- Один товар по ID
- Типы товаров
- Состояния товаров
- Корзина (добавление, удаление, просмотр)

## 🚀 Установка

```bash
git clone git@github.com:DmPe91/scooter-laravel-api.git
cd scooter-laravel-api
composer install
cp .env.example .env
php artisan key:generate
```

## Связанный репозиторий

Фронтенд: [scooter-vue-client](https://github.com/DmPe91/scooter-vue-client)

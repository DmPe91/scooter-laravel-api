# Scooter43 API (Laravel)

REST API для интернет-магазина электротранспорта SCOOTER43.  
Бэкенд на Laravel, отдаёт данные о товарах, типах, состояниях и корзине.

## 🛠 Стек

- PHP 8.3
- Laravel 13
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

**🚀 Live Demo:** [scooter-vue-client.vercel.app](https://scooter-vue-client.vercel.app)  
**📡 Backend API:** [scooter-laravel-api.onrender.com](https://scooter-laravel-api.onrender.com)  

> ⚠️ **Важно:** Backend на бесплатном тарифе Render.com "засыпает" после 15 минут неактивности. Первая загрузка может занять 30-60 секунд, иногда приходиться перезгружать страницу несколько раз.

## Связанный репозиторий

Фронтенд: [scooter-vue-client](https://github.com/DmPe91/scooter-vue-client)

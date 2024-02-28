<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

## Test Task:
``
Задача:
Необходимо взять любой общедоступный api (прогноз погоды / курсы валют / курсы криптовалют / любой другой по выбору) в качестве источника данных.

1. создать таблицу, куда будет попадать данные из внешнего api.
2. реализовать синхронизацию с внешним api с определённой периодичностью.
3. создать страницу на фронте с минимальным оформлением, где будут отображаться накопленные данные (с пагинацией / фильтрацией)
4. создать админ панель с возможностью редактировать данные. - опционально

Инструменты, технологии и прочие требования:

1. Laravel Framework
2. MySQL database
3. FilamentPHP для админ панели - опционально.
4. Регистрация / авторизация (и в админ панель в т.ч.) - опционально.

``

## Login Admin:
```
http://localhost:8000/admin/login
```

``
http://127.0.0.1:8000/weather
``


## Добавил файл для тестов 
```
php /www/Lar-Project/tests/Feature/WeatherServiceTest.php 
```
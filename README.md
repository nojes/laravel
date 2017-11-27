
# Laravel Framework project

[![Build Status](https://travis-ci.org/nojes/laravel.svg?branch=master)](https://travis-ci.org/nojes/laravel)

This is a test project for learning of Laravel PHP Framework.

### Installation Laravel

##### Via Laravel Installer

Download Laravel Installer:
```
composer global require "laravel/installer"
```

Create new project:
```
laravel new project-name
```

##### Via Composer
```
composer create-project --prefer-dist laravel/laravel project-name
```

### Installation this project

From your console, run the following commands:
```
git clone https://github.com/nojes/laravel.git
cd laravel
composer install
cp .env.example .env
```

or 

via composer:
```
composer create-project --prefer-dist nojes/laravel=@dev laravel
```

Now modify `.env` with your details. These are the minimum settings that you need to fill in:
- `DB_CONNECTION`, `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`

After `.env` has been populated:
```
php artisan key:generate
php artisan migrate
```

After install you may run the HTTP-server by `serve` Artisan command:
```
php artisan serve
```
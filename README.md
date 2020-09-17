# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official App Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Official API Documentation
Documentation for use API from this App [API Documentation](https://documenter.getpostman.com/view/6505899/TVKA3JfL)

## How To Download
1. Use git clone

```
git clone https://github.com/Harun1804/case-2.git
```

2. Go to Project Folder

```
cd case-2
```

## How To Use
1. Install Composer First on [Composer Site](https://getcomposer.org/download/)
2. Install Library First

```
composer install
```

3. Make Duplicate of .env from .env.example

```
cp .env.example .env
```

4. Open .env file
5. Change values of **DB_DATABASE**,**DB_NAME**,**DB_PASSWORD** same with your local servel
6. Run App With

```
php -S localhost:8000 -t public
```

7. For **APP_KEY** you can get while running this app, on '/key' route, then copy from that and paste on **APP_KEY** value

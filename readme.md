<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Страница новостей

Ниже представлены короткие вставки Shortcodes для взаимодействия с фронтендом страницы, необходимо в html верстку вставить необходимый шорткод с необходимыми параметрами 

- [Листинг постов](#Листинг-постов).
- [Боковая панель](#Боковая-панель).
- [Страница поста](#Страница-поста).
- Страница [авторизации](#Страница-авторизации) и страница [регистрации](#Страница-регистрации).
- Функциональные ссылки связанные с [авторизацией и регистрацией](#Ссылки-авторизации)

***
### Листинг постов

Начало и конец цикла вывода постов

```php
 @foreach($posts as $post)
 ...
 @endforeach 
```

вывод изображения поста

```php
<img src="{{$post->getImage()}}" alt="">
```

вывод заголовока поста и ссылки на него

```php
<a href="{{route('news.show', $post->slug)}}">{{$post->title}}</a>
```

вывод даты 


```php
{{$post->date}}
```

краткое описание поста

```php
{!! $post->description !!}
```

Добавление пагинации к постам
```php
{{$posts->links()}} 
```
***
### Боковая панель

На боковой панели сайта (sidebar есть возможность использовать обширный функционал, который есть возможность добавлять по желанию), ниже представлены базовые элементы которые можно отобразить.

Популярные посты 
```php
@foreach($popularPosts as $post)
@endforeach
```
Последние посты 
```php
@foreach($recentPosts as $post)
@endforeach
```
Рекомендованные посты
```php
@foreach($featuredPosts as $post)
@endforeach
```
***
Дополнительно что возможно отобразить к данным постам:
***
Путь к новости:
```php
{{route('news.show', $post->slug)}}
```

Изображение

```php
{{$post->getImage()}}
```

Категорию

```php
{{$post->getCategorytitle()}}
```

Дату

```php
{{$post->date}}
```

Заголовок

```php
{{$post->title}}
```





### Страница поста
### Страница авторизации 
### Страница регистрации
### Ссылки авторизации

# Создание раздела полезные материалы

Цель: создать 2 раздела в которых будут публиковаться статьи и видео материалы.

## Что необходимо сделать

### Создание моделей

Создать 2 модели а к ним миграции, сидеры и один общий контроллер.

**Модель - текстовые материалы**

Поля:

- Заголовок
- Слаг
- Короткое описание
- Текст
- Имя автора
- Фото автора
- должность автора
- seo заголовок
- seo описание

**Модель - Видео материалы**

Поля:

- Заголовок
- Слаг
- Короткое описание
- Имя автора
- Должность автора

Для каждого поля модели добавь модификатор ->comment()

### Создание шаблонов

Далее нужно создать 3 шаблона и разместить их в папку resources/views/blog

Шаблоны:

- videos.blade.php - страница на которой отображаются все видео
- texts.blade.php - страница на которой отображаются все статьи
- page.balde.php - страница на которой отображается статья

В каждом из шаблонов размести код:

```php

@extends('layouts.all')

@php
    $title = <...>;
    $description = <...>;
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-header.inner-page-header></x-header.inner-page-header>
    <x-header.inner-page-title-no-photo :title="<...>"></x-header.inner-page-title-no-photo>

    <section class="page_section">
        <div class="container text_styles">
            <Основной контент>
        </div>
    </section>

<section class="review_section">
    <div class="container">
        <h2>Отзывы</h2>
        <hr class="gray_hr">
        <x-reviews.reviews></x-reviews.reviews>
    </div>
</section>
@endsection

```

Придумай для первых 2 шаблонов seo заголовок и описание и помести их в переменные $title = <...>; и $description = <...>; соответственно.

Для последнего шаблона они будут выводится из передаваемой в шаблон модели. Вставь их примерно таким образом:

```php
@php
    $title = (empty($page->seo_title))?$page->title:$page->seo_title;
    $description = (empty($page->seo_description))?$page->title:$page->seo_description;
@endphp
```

### Создание карточек для отображения элементов

Создай 2 шаблона карточек (для отображения видео и текстового превю) и положи их в папку resources/views/components/card

phpNT - Bootstrap Select
================================

### Описание:
### Позволяет использовать стилизованные выпадающие списки. Плагин мультиязычный, поэтому установите язык (‘ru’, ‘fr’, ‘de’, ‘en’ – по умолчанию) в своем приложении.
### [DEMO](http://phpnt.com/widget/bootstrap-select)

------------
### - [Поддержать phpNT](http://phpnt.com/donate/index)
------------

### Социальные сети:
 - [Канал YouTube](https://www.youtube.com/c/phpnt)
 - [Группа VK](https://vk.com/phpnt)
 - [Группа facebook](https://www.facebook.com/Phpnt-595851240515413/)

------------

Установка:

------------

```
php composer.phar require "phpnt/bootstrap-select" "*"
```
или

```
composer require phpnt/bootstrap-select
```

или добавить в composer.json файл

```
"phpnt/bootstrap-select": "*"
```

### Представление:
------------
```php
<?php
use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;
use phpnt\bootstrapSelect\BootstrapSelectAsset;
// теперь, все элементы, которые имеют класс selectpicker, будут стилизованными выпадающими списками
// массив элементов
$items = [
    1 => 'Апельсин',
    2 => 'Бочка',
    3 => 'Велосипед',
    4 => 'Гризли',
    5 => 'Дом',
    6 => 'Енот',
    7 => 'Ежкина мать',
    8 => 'Жигули',
    9 => 'Зуб',
    10 => 'Ирригация'
];
// Использование в активной форме
$form = ActiveForm::begin();
echo $form->field($model, 'id')->dropDownList($items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-success',
        'live-search' => 'false',
        'size' => 7,
        'title' => 'Ничего не выбрано'
    ]]);
echo $form->field($model, 'id')->dropDownList($items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-primary',
        'live-search' => 'true',
        'size' => 7,
        'title' => 'Ничего не выбрано',
    ],
]);
echo $form->field($model, 'id')->dropDownList($items, [
    'class'  => 'form-control selectpicker',
    'multiple' => true,
    'data' => [
        'style' => 'btn-warning',
        'live-search' => false,
        'size' => 7,
    ],
]);
ActiveForm::end();
// Использование без активной формы
echo Html::dropDownList('item', null, $items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-info',
        'live-search' => 'false',
        'size' => 7,
        'title' => 'Ничего не выбрано',
    ]
]);
echo Html::dropDownList('item', null, $items, [
    'class'  => 'form-control selectpicker',
    'data' => [
        'style' => 'btn-default',
        'live-search' => 'true',
        'size' => 7,
        'title' => 'Ничего не выбрано',
    ]
]);
?>
```
------------
# Документация (примеры):
## [Bootstrap Select](https://silviomoreto.github.io/bootstrap-select/)
------------
### Версия:
### 0.0.1
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------

phpNT - Animate CSS
================================

### Описание:
### Анимирует HTML контент.
### [DEMO](http://phpnt.com/widget/animate-css)

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
php composer.phar require "phpnt/animate-css" "*"
```
или

```
composer require phpnt/animate-css
```

или добавить в composer.json файл

```
"phpnt/animate-css": "*"
```

### Представление:
------------
```php
<?php
use phpnt\animateCss\AnimateCssAsset;
AnimateCssAsset::register($this);
// теперь, ко всем элементам, которые имеют класс animated, применяется анимация
?>
```
```html
<div class="col-md-4 col-md-offset-4 text-center">
    <div class="animated fadeInDown" style="margin-top: 30px; padding: 5px 5px 5px 5px; background-color: #00a7d0;">
        <h3 style="margin-top: 5px;">fadeInDown</h3>
    </div>
</div>
<div class="col-md-4 col-md-offset-4 text-center">
    <div class="animated bounceInRight" style="margin-top: 30px; padding: 5px; background-color: #ce8483;">
        <h3 style="margin-top: 5px;">bounceInRight</h3>
    </div>
</div>
<div class="col-md-4 col-md-offset-4 text-center">
    <div class="animated slideInLeft" style="margin-top: 30px; padding: 5px; background-color: #2AA198;">
        <h3 style="margin-top: 5px;">slideInLeft</h3>
    </div>
</div>
<div class="col-md-4 col-md-offset-4 text-center">
    <div class="animated rotateInUpRight" style="margin-top: 30px; padding: 5px; background-color: #77ee77;">
        <h3 style="margin-top: 5px;">rotateInUpRight</h3>
    </div>
</div>
```
------------
# Документация (примеры):
## [Animate CSS](https://daneden.github.io/animate.css/)
------------
### Версия:
### 0.0.1
------------
### Лицензия:
### [MIT](https://ru.wikipedia.org/wiki/%D0%9B%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D1%8F_MIT)
------------

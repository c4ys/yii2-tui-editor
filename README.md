Markdown WYSIWYG Editor base on tui.editor
==========================================
Markdown WYSIWYG Editor. GFM Standard + Chart & UML Extensible. http://ui.toast.com/tui-editor

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist c4ys/yii2-tui-editor "*"
```


```
"c4ys/yii2-tui-editor": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \c4ys\tuieditor\TuiEditorAsset::widget(); ?>```
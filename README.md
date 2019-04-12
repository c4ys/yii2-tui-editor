Yii Markdown WYSIWYG Editor
==========================================
Markdown WYSIWYG Editor  http://ui.toast.com/tui-editor

Installation
------------

修改composer.json

```
"repositories": [
    {
      "url": "https://github.com/c4ys/yii2-tui-editor.git",
      "type": "vcs"
    }
  ]

"c4ys/yii2-tui-editor": "dev-master"
```

运行

```bash
composer update
```


用法
-----

```php
 <?= $form->field($model, 'desc')->widget(\c4ys\tuieditor\TuiEditor::class) ?>

```
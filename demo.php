<?php
//$this->registerCssFile('/tui.editor-1.3.3/tui-editor.css');
//$this->registerCssFile('/tui.editor-1.3.3/tui-editor-contents.css');
//$this->registerCssFile('/codemirror/5.33.0/codemirror.css');
//$this->registerCssFile('/highlight.js/styles/github.css');
//$this->registerJSFile('/tui.editor-1.3.3/tui-editor-Editor-full.js');
$this->registerCssFile('https://uicdn.toast.com/tui-editor/latest/tui-editor.css');
$this->registerCssFile('https://uicdn.toast.com/tui-editor/latest/tui-editor-contents.css');
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.33.0/codemirror.css');
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/github.min.css');
$this->registerJSFile('https://uicdn.toast.com/tui-editor/latest/tui-editor-Editor-full.js');
$js = <<<JS
    var editor = new tui.Editor({
    el: document.querySelector('.tui-editor'),
initialEditType: 'wysiwyg',
previewType: 'vertical',
height: 'auto',
usageStatistics:'false'
});
JS;
$this->registerJs($js, View::POS_READY);
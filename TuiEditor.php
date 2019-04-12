<?php

namespace c4ys\tuieditor;

use yii\helpers\ArrayHelper;
use yii\Helpers\Url;
use yii\Helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\web\View;

/**
 * This is just an example.
 */
class TuiEditor extends \yii\widgets\InputWidget
{
    public $pluginOptions = [];

    public $options = [];

    public $defaultPluginOptions = [
        'initialEditType' => 'wysiwyg',
        'previewType' => 'vertical',
        'height' => 'auto',
        'usageStatistics' => false,
    ];

    public $defaultOptions = [];

    public function init()
    {
        parent::init();
        $this->options = ArrayHelper::merge($this->defaultOptions, $this->options);
        $this->pluginOptions = ArrayHelper::merge($this->defaultPluginOptions, $this->pluginOptions);
        $view = $this->getView();
        if ($this->hasModel()) {
            $this->value = $this->model->{$this->attribute};
        }
        $this->pluginOptions['initialValue'] = $this->value;
        $pluginOptions = json_encode($this->pluginOptions);
        TuiEditorAsset::register($view);
        $js = <<<JS
var fileInput{$this->attribute} = $('#{$this->options['id']}');
var editorConfig{$this->attribute} = $pluginOptions;
editorConfig{$this->attribute}.el = document.querySelector('#{$this->options['id']}-editor');
editorConfig{$this->attribute}.events = {
    change:function(){
        fileInput{$this->attribute}.val(editor{$this->attribute}.getValue());
    }
}
var editor{$this->attribute} = new tui.Editor(editorConfig{$this->attribute});
    
JS;
        $view->registerJs($js);
    }

    public function run()
    {
        $input_name = Html::getAttributeValue($this->model, $this->attribute);
        $input = Html::hiddenInput($input_name, $this->value, ['id' => $this->options['id']]);
        $input = $this->renderInputHtml('hidden');
        $editor = Html::tag('div', $this->value, ['id' => $this->options['id'] . '-editor']);
        return Html::tag('div', $input . $editor);
    }
}
<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace c4ys\tuieditor;
use yii\web\AssetBundle;
/**
 * This asset bundle provides the javascript files for client validation.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TuiEditorAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';
    public $css = [
        'tui.editor/tui-editor.css',
        'tui.editor/tui-editor-contents.css',
        'codemirror/5.33.0/codemirror.css',
        'highlight.js/styles/github.css',
    ];
    public $js = [
        'tui.editor/tui-editor-Editor-full.js',
    ];
    public $depends = array(
        'yii\web\JqueryAsset',
    );
}

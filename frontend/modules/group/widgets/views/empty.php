<?php 

use yii\bootstrap\Html;


echo Html::beginTag('div',[
    'class' => 'list-group list-group-custom bg-gray'
]) .
    Html::a(
        Html::img('@frontendImg/english.svg') . Html::beginTag('span') . 'No subjects yet' . Html::endTag('span'),
        '#',
        [
            'class' => 'list-group-item list-group-item-custom flex align-items-center'
        ]
    ) .
Html::endTag('div');

?>
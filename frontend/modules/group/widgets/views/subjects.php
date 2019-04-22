<?php 

use yii\bootstrap\Html;

?>
<?php 
    echo Html::beginTag('div',[
        'class' => 'list-group list-group-custom bg-gray'
    ]) .
        Html::a(
            Html::img('@frontendImg/english.svg') . Html::beginTag('span') . Html::encode($subject_relation->subject->title) . Html::endTag('span'),
            ['/group/subject/view', 'id' => $subject_relation->subject->id],
            [
                'class' => 'list-group-item list-group-item-custom flex align-items-center'
            ]
        ) .
    Html::endTag('div');
?>
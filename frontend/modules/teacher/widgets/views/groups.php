<?php 

use yii\bootstrap\Html;

?>
<?php if($teacher_groups): ?>
    <?php foreach($teacher_groups as $teacher_group): ?>
        <?php 
            echo Html::beginTag('div',[
                'class' => 'list-group list-group-custom bg-gray'
            ]) .
                Html::a(
                    Html::img('@frontendImg/english.svg') . Html::beginTag('span') . Html::encode($teacher_group->group->name) . Html::endTag('span'),
                    ['/teacher/group/view', 'id' => $teacher_group->group->id],
                    [
                        'class' => 'list-group-item list-group-item-custom flex align-items-center'
                    ]
                ) .
            Html::endTag('div');
        ?>
    <?php endforeach; ?>
<?php else: ?>
<?php 
    echo Html::beginTag('div',[
        'class' => 'list-group list-group-custom bg-gray'
    ]) .
        Html::a(
            Html::img('@frontendImg/english.svg') . Html::beginTag('span') . 'No groups yet' . Html::endTag('span'),
            '#',
            [
                'class' => 'list-group-item list-group-item-custom flex align-items-center'
            ]
        ) .
    Html::endTag('div');
?>
<?php endif; ?>
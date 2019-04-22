<?php 

use yii\bootstrap\Html;
use frontend\widgets\LoginWidget;
use frontend\modules\group\widgets\SubjectsWidget;

?>
<div class="col-md-3">
    <div class="row">

        <div class="col-xs-12">
            <?php echo LoginWidget::widget([
                'visible' => Yii::$app->getUser()->getIsGuest(),
            ]) ?>
        </div>
        <div class="col-xs-12 sidebar-bottom">
            <div class="list-group list-group-custom bg-grey">
                <?php 
                echo Html::a(
                    Html::img('@frontendImg/groups.svg') . Html::beginTag('span') . 'Students' . Html::endTag('span'),
                    ['/group/student/index'],
                    ['class' => 'list-group-item list-group-item-custom flex align-items-center']
                ); 
                
                echo Html::a(
                    Html::img('@frontendImg/attendance.svg') . Html::beginTag('span') . 'Attendance' . Html::endTag('span'),
                    ['/group/attendance/index'],
                    ['class' => 'list-group-item list-group-item-custom flex align-items-center']
                ); 

                echo Html::a(
                    Html::img('@frontendImg/homework.svg') . Html::beginTag('span') . 'Assignments' . Html::endTag('span'),
                    ['/group/assignment/index'],
                    ['class' => 'list-group-item list-group-item-custom flex align-items-center']
                ); 

                echo Html::a(
                    Html::img('@frontendImg/result.svg') . Html::beginTag('span') . 'Assignment results' . Html::endTag('span'),
                    ['/group/assignments-results/index'],
                    ['class' => 'list-group-item list-group-item-custom flex align-items-center']
                );
                
                echo Html::a(
                    Html::img('@frontendImg/rating.svg') . Html::beginTag('span') . 'Rating' . Html::endTag('span'),
                    ['/group/rating/index'],
                    ['class' => 'list-group-item list-group-item-custom flex align-items-center']
                ); 
                
                ?>
            </div>
        </div>
    </div>
</div>
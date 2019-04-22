<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\Auditorium;
use common\models\Group;
use common\models\StudyDay;
use common\models\StudyPeriod;

/* @var $this yii\web\View */
/* @var $model common\models\Timetable */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="timetable-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'room_id')->dropDownList([
        ArrayHelper::map(Auditorium::find()->all(),'id', 'name')
    ]) ?>

    <?= $form->field($model, 'group_id')->dropDownList([
        ArrayHelper::map(Group::find()->all(),'id', 'name')
    ]) ?>    

    <?= $form->field($model, 'study_day_id')->dropDownList([
        ArrayHelper::map(StudyDay::find()->all(),'id', 'day')
    ]) ?>    

    <?= $form->field($model, 'study_period_id')->dropDownList([
        ArrayHelper::map(StudyPeriod::find()->all(),'id', 'studyPeriodFullTime')
    ]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

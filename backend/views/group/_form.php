<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\Subject;

/* @var $this yii\web\View */
/* @var $model common\models\Group */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($user, 'username')->textInput(); ?>

    <?php echo $form->field($user, 'password')->passwordInput(); ?>

    <?php echo $form->field($user, 'status')->checkbox(['label' => Yii::t('backend', 'Activate')]); ?>

    <?= $form->field($model, 'subject_id')->dropDownList([
        ArrayHelper::map(Subject::find()->all(),'id', 'title')
    ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('common', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

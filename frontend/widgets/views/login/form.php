<?php 

use yii\bootstrap\Html;
use yii\widgets\ActiveForm;

?>
<div class="sidebar-top p-10 bg-blue text-white">
    <div class="row">
        <div class="col-xs-4 p-10">
            <?php echo Html::img('@frontendImg/avatar-white.svg', [
                    'class' => 'img-responsive',
                ]); ?>
        </div>
        <div class="col-xs-8">
            <h1><?php echo Yii::t('frontend', 'Login') ?></h1>
        </div>
        <div class="col-xs-12">
            <?php $form = ActiveForm::begin([
                'action' => ['/account/sign-in/login'],
                'options' => [
                    'class' => 'form-horizontal form-login text-center'
                ]
            ]); ?>

                    <?php echo $form->field($model, 'identity',[
                'template' => '<div class="form-group"><div class="col-sm-12">{input}</div></div>',
                'inputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Username',
                ],
                'options' => [
                    'tag' => false,
                ],
            ])->textInput()->label(false) ?>

                    <?php echo $form->field($model, 'password',[
                'template' => '<div class="form-group"><div class="col-sm-12">{input}</div></div>',
                'inputOptions' => [
                    'class' => 'form-control',
                    'placeholder' => 'Password',
                ],
                'options' => [
                    'tag' => false,
                ],
            ])->passwordInput()->label(false) ?>

            <div class="form-group">
                <div class="col-sm-12">
                    <?php echo Html::submitButton('Sign in', [
                'class' => 'btn btn-custom'
            ]) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>

        </div>
    </div>
</div>

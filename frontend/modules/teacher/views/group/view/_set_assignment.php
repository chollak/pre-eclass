<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use bs\Flatpickr\FlatpickrWidget;
use vova07\fileapi\Widget;

?>

<?php $form = ActiveForm::begin(); ?>

    <?php echo $form->field($model, 'title')->textInput(['maxlength' => true, 'placeholder' => 'Title']) ?>
    <?php echo $form->field($model, 'details')->textarea() ?>
    
    <div class="row">
        <div class="col-xs-6">
            <?php echo $form->field($model, 'due_start_date')->widget(FlatpickrWidget::className(),[
                'locale' => strtolower(substr(Yii::$app->language, 0, 2)),
                'groupBtnShow' => true,
                'options' => [
                    'class' => 'form-control',
                ],
                'clientOptions' => [
                    'allowInput' => true,
                    'enableTime' => true,
                    'defaultMinute' => 0,
                    'enableSeconds' => true,
                    'minuteIncrement' => '1',
                    'time_24hr' => true,
                ],
            ]); ?>
        </div>
        <div class="col-xs-6">
            <?php echo $form->field($model, 'due_end_date')->widget(FlatpickrWidget::className(),[
                'locale' => strtolower(substr(Yii::$app->language, 0, 2)),
                'groupBtnShow' => true,
                'options' => [
                    'class' => 'form-control',
                ],
                'clientOptions' => [
                    'allowInput' => true,
                    'enableTime' => true,
                    'defaultMinute' => 59,
                    'defaultSecond' => 59,
                    'enableSeconds' => true,
                    'minuteIncrement' => '1',
                    'time_24hr' => true,
                ],
            ]); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <?php echo $form->field($model, 'min_score')->textInput() ?>
        </div>
        <div class="col-xs-6">
            <?php echo $form->field($model, 'max_score')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?php echo $form->field($model, 'file_url')->widget(Widget::className(),
            [
                'settings' => [
                    'url' => ['/controller/fileapi-upload']
                ]
            ]
        ); ?>
    </div>
    <?php echo Html::submitButton('Submit', ['class' => 'btn btn-default']) ?>
<?php ActiveForm::end() ?>
<?php 
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

?>
<a href="#" data-toggle="modal" data-assignment-id="<?php echo $model->id; ?>" class="bg-success">
    <div class="media">
        <div class="media-left">
        <?php echo Html::img('@frontendImg/list-homeworks.svg', [
                        'class' => 'media-object'
                    ]); ?>
        </div>
        <div class="media-body">
            <p>
                <?php echo HtmlPurifier::process($model->title); ?>
            </p>
            <p class="help-block ">
                <?php echo $model->due_start_date ?> - <?php echo $model->due_end_date ?>
            </p>
        </div>
    </div>
</a>
<?php 
use yii\bootstrap\Html;
?>

<a href="#" data-toggle="modal" data-target="#myModal">
    <div class="media">
        <div class="media-left">
            <?php echo Html::img('@frontendImg/list-homeworks.svg', [
                'class' => 'media-object',
            ]); ?>
        </div>
        <div class="media-body">
            <p>
                write a comparison essay about global warming and other kindes disasters snd who have to solve
                it
            </p>
            <p class="text-success">
                3 days left
            </p>
        </div>
    </div>
</a>
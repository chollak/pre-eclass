<?php 

use yii\bootstrap\Html;
use yii\widgets\ListView;

?>

<?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => function ($model, $key, $index, $widget){
        return $this->render('_assignment',[
            'model' => $model,
        ]);
    }
]); ?>

<!-- <a href="#" data-toggle="modal" data-target="#myModal" class="bg-success">
    <div class="media">
        <div class="media-left">
            <?//php echo Html::img('@frontendImg/list-homeworks.svg', [
                        //'class' => 'media-object'
                   // ]); ?>
        </div>
        <div class="media-body">
            <p>
                write a comparison essay about global warming and other kindes disasters snd who have to solve
                it
            </p>
            <p class="help-block">3 days left</p>
        </div>
    </div>
</a> -->
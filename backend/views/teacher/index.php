<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\TeacherSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', 'Teachers');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-index">

    <p>
        <?= Html::a(Yii::t('common', 'Create Teacher'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'firstname',
            'lastname',
            'middlename',
            //'created_at',
            //'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{add} {view} {update} {delete}',
                'buttons' => [
                    'add' => function($url, $model, $key){
                        return Html::a('<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>', '#', [
                            'id' => 'assign-group-btn',
                            'data' => [
                                'url' => Url::to(['/teacher-group/create']),
                                'id' => $key
                            ]
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>




<?php

Modal::begin([
    'header' => '<h4>Accept query</h4>',
    'id' => 'assign-group-modal',
    'size' => 'modal-md',
]);
Modal::end();

$js = <<<JS
    $('#assign-group-btn').on('click', function(){
        let modal = $('#assign-group-modal');
        modal.find('.modal-body').load($(this).data('url'));
        console.log(modal.find('.modal-body input#teachergroup-teacher_id'));
        modal.find('.modal-body input#teachergroup-teacher_id').val($(this).data('id'));
        modal.modal();
    });
    
JS;

$this->registerJs($js);

?>

</div>

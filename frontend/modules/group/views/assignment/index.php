<?php 
use yii\widgets\ListView;
use yii\helpers\Html;
?>
<?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'itemView' => function ($model, $key, $index, $widget){
        return $this->render('_assignment',[
            'model' => $model,
        ]);
    }
]); ?>

<?php echo $this->render('_modal'); ?>

<?php 
$js = <<<JS

    $('a[data-toggle=modal]').on('click',function(){
        let assignment_id = $(this).attr('data-assignment-id');
        $.ajax({
            type: "get",
            url: "/group/ajax/assignment",
            data:{
                assignment_id: assignment_id,
            },
            success: function(response){
                $('div.modal-content').html(response);
                $('#myModal').modal();
            }
        });
    });

JS;

$this->registerJs($js); ?>
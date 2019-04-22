<?php 

use yii\grid\GridView;
use yii\bootstrap\Html;
use yii\grid\SerialColumn;
use yii\jui\DatePicker;

?>

<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'summary' => false,
    'columns' => [
        [
            'class' => SerialColumn::className(),
        ],
        'student.firstname',
        'student.lastname',
        [
            'attribute' => 'date',
        ],
        'status',
    ]
]
); ?>
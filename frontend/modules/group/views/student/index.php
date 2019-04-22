<?php 

use yii\grid\GridView;
use yii\bootstrap\Html;
use yii\grid\SerialColumn;

?>

<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class' => SerialColumn::className(),
        ],
        'firstname',
        'lastname',
    ]
]
); ?>
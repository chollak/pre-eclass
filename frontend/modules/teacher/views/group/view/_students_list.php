<?php 

use yii\grid\GridView;
use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\grid\SerialColumn;

?>

<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class' => SerialColumn::className()
        ],
        'firstname',
        'lastname',
        // 'middlename',
    ],
]); ?>
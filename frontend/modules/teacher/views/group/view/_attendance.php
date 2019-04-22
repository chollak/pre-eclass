<?php 

use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\bootstrap\Html;
use yii\grid\CheckboxColumn;
use yii\grid\SerialColumn;

?>

<?php echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class' => SerialColumn::className(),
            'headerOptions' => [
                'style' => 'width: 3%'
            ]
        ],
        'firstname',
        'lastname',
        [
            'class' => CheckboxColumn::className(),
            'header' => 'A',
            'name' => 'absence',
            'headerOptions' => [
                'style' => 'width: 3%'
            ]
        ],
        [
            'class' => CheckboxColumn::className(),
            'header' => 'P',
            'name' => 'presence',
            'headerOptions' => [
                'style' => 'width: 3%'
            ]
        ],
        // 'middlename',
        // [
        //     'class'    => ActionColumn::className(),
        //     'template' => '{present} {absent}',
        //     'buttons'  => [
        //         'present' => function($url, $model, $key){
        //             return Html::a('<span class="glyphicon glyphicon-ok"></span>', '#', [
        //                 'id' => 'attendance-present-btn',
        //                 'data-student-id' => $model->id,
        //             ]);
        //         },
        //         'absent' => function ($url, $model, $key){
        //             return Html::a('<span class="glyphicon glyphicon-remove"></span>', '#', [
        //                 'id' => 'attendance-absense-btn',
        //                 'data-student-id' => $model->id,
        //             ]);
        //         }
        //     ]
        // ]
    ],
]); ?>
<!-- <div class="table-responsive">
    <form action="#" class="form-inline form-attendance">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>ID</th>
                    <th>Attendance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>John Doe</td>
                    <td>u1810123</td>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-id">
                            <label for="present" class="present"><span class="glyphicon glyphicon-ok"
                                    aria-hidden="true"></span></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="absent">
                            <label for="absent" class="absent"><span class="glyphicon glyphicon-remove"
                                    aria-hidden="true"></span></label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Mary Moe</td>
                    <td>u1234567</td>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-id">
                            <label for="checkbox-id" class="present"><span class="glyphicon glyphicon-ok"
                                    aria-hidden="true"></span></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-id1">
                            <label for="checkbox-id1" class="absent"><span class="glyphicon glyphicon-remove"
                                    aria-hidden="true"></span></label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>July Dooley</td>
                    <td>u1233211</td>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-id">
                            <label for="checkbox-id" class="present"><span class="glyphicon glyphicon-ok"
                                    aria-hidden="true"></span></label>
                        </div>
                        <div class="checkbox">
                            <input type="checkbox" id="checkbox-id1">
                            <label for="checkbox-id1" class="absent"><span class="glyphicon glyphicon-remove"
                                    aria-hidden="true"></span></label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div> -->
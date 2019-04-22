<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Timetable */

$this->title = Yii::t('common', 'Create Timetable');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Timetables'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="timetable-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Auditorium */

$this->title = Yii::t('common', 'Update Auditorium: {name}', [
    'name' => $model->name,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Auditorium'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="auditorium-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudyPeriod */

$this->title = Yii::t('common', 'Update Study Period: {name}', [
    'name' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Study Periods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('common', 'Update');
?>
<div class="study-period-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

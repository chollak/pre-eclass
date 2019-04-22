<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudyDay */

$this->title = Yii::t('common', 'Create Study Day');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Study Days'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="study-day-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

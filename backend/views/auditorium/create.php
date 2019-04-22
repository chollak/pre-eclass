<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Auditorium */

$this->title = Yii::t('common', 'Create Auditorium');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Auditorium'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auditorium-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Assignment */

$this->title = Yii::t('common', 'Create Assignment');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

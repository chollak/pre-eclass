<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\AssignmentMark */

$this->title = Yii::t('common', 'Create Assignment Mark');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Assignment Marks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-mark-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

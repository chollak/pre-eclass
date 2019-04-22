<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StudyPeriod */

$this->title = Yii::t('common', 'Create Study Period');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Study Periods'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="study-period-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TeacherGroup */

$this->title = Yii::t('common', 'Create Teacher Group');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Teacher Groups'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-group-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\CourseDetail */

$this->title = 'Update Course Detail: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Course Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="course-detail-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

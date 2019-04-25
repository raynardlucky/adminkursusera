<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\CourseDetail */

$this->title = 'Create Course Detail';
$this->params['breadcrumbs'][] = ['label' => 'Course Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-detail-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>

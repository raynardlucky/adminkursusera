<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Course */

$this->title = 'Create Course';
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Instructor */

$this->title = 'Update Instructor: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Instructors', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->inid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="instructor-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

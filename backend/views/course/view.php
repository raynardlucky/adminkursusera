<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Course */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-view box box-primary">
    <div class="box-header">
        <?= Html::a('Update', ['update', 'id' => $model->course_id], ['class' => 'btn btn-primary btn-flat']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->course_id], [
            'class' => 'btn btn-danger btn-flat',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?= DetailView::widget([
            'model' => $model,
            'attributes' => [
                'course_id',
                'name',
                'program',
            ],
        ]) ?>
    </div>
</div>

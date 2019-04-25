<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CourseDetailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Course Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-detail-index box box-primary">
    <div class="box-header with-border">
        <?= Html::a('Create Course Detail', ['create'], ['class' => 'btn btn-success btn-flat']) ?>
    </div>
    <div class="box-body table-responsive no-padding">
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'layout' => "{items}\n{summary}\n{pager}",
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                'title',
                'description',
                'course_id',
                'instructor_id',
                'link_video',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
    </div>
</div>

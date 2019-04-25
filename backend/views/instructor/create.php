<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Instructor */

$this->title = 'Create Instructor';
$this->params['breadcrumbs'][] = ['label' => 'Instructors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="instructor-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>

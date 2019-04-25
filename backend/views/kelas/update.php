<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Kelas */

$this->title = 'Update Kelas: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Kelas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kelas-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

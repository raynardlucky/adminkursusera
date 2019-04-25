<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Provider */

$this->title = 'Update Provider: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="provider-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

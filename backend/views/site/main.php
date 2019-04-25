<?php
/**
 * Created by PhpStorm.
 * User: Raynard
 * Date: 19/03/2019
 * Time: 12:58
 */


\yii\web\YiiAsset::register($this);

use yii\helpers\Html; ?>
<div class="kategori-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?=Html::encode($model->kategori_Name)  ?>
    </p>

</div>

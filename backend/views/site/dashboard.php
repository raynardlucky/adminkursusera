<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RecordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Records';
$this->params['breadcrumbs'][] = $this->title;
$page = '';
$sec = "2";
?>
<!--<head>-->
<!--    <meta http-equiv="refresh" content="--><?php //echo $sec ?><!--;URL='--><?php //echo $page ?><!--'">-->
<!--</head>-->
<div class="record-index" onload="top3()">
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Top 10 All Runners</h3>
                    </div>
                    <div class="box-body no-padding">
                        <table id="table" class="table table-striped" style="font-size: large">
                            <tr>
                                <th>Runner's Number</th>
                                <th>Name</th>
                                <th>Lap</th>
                            </tr>
                            <?php
                            $content = array();
                            foreach ($allGender as $item) {
                                array_push($content, $item->runner_ID);

                            }
                            foreach ($allGender as $data) {
                                if ($content[0] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff1744'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } elseif ($content[1] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff5252'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } elseif ($content[2] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff7961'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } else {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                }

                            }
                            ?>
                        </table>
                    </div>
                </div>

            </div>

            <div class="col-md-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Top 10 Male Runners</h3>
                    </div>
                    <div class="box-body no-padding">
                        <table class="table table-striped" style="font-size: large">
                            <tr>
                                <th>Runner's Number</th>
                                <th>Name</th>
                                <th>Lap</th>
                            </tr>
                            <?php
                            $content = array();
                            foreach ($male as $item) {
                                array_push($content, $item->runner_ID);

                            }
                            foreach ($male as $data) {
                                if ($content[0] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff1744'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } elseif ($content[1] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff5252'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } elseif ($content[2] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff7961'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } else {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                }

                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Top 10 Female Runners</h3>
                    </div>
                    <div class="box-body no-padding">
                        <table class="table table-striped" style="font-size: large">
                            <tr>
                                <th>Runner's Number</th>
                                <th>Name</th>
                                <th>Lap</th>
                            </tr>
                            <?php
                            $content = array();
                            foreach ($female as $item) {
                                array_push($content, $item->runner_ID);

                            }
                            foreach ($female as $data) {
                                if ($content[0] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff1744'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } elseif ($content[1] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff5252'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } elseif ($content[2] == $data->runner_ID) {
                                    echo "<tr style='background-color: #ff7961'>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                } else {
                                    echo "<tr>";
                                    echo "<td>";
                                    echo Html::encode($data->runner_ID);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Nama);
                                    echo "</td>";

                                    echo "<td>";
                                    echo Html::encode($data->Lap);
                                    echo "</td>";
                                    echo "<tr>";
                                }

                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
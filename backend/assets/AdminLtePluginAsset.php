<?php
/**
 * Created by PhpStorm.
 * User: Raynard
 * Date: 27/03/2019
 * Time: 11:27
 */

namespace backend\assets;


use yii\web\AssetBundle;
class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/bower_components';
    public $js = [
//        'datatables/dataTables.bootstrap.min.js',
        // more plugin Js here
    ];
    public $css = [
        'Ionicons/css/ionicons.css',
//        'datatables/dataTables.bootstrap.css',
        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}
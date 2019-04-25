<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
//                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
//                    ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/site/dashboard']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Master Data',
                        'icon' => 'database',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Program', 'icon' => 'file-code-o', 'url' => ['/program/index'],],
                            ['label' => 'Course', 'icon' => 'file-code-o', 'url' => ['/course/index'],],
                            ['label' => 'Instructor', 'icon' => 'file-code-o', 'url' => ['/instructor/index'],],
                            ['label' => 'Course Detail', 'icon' => 'file-code-o', 'url' => ['/course-detail/index'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>

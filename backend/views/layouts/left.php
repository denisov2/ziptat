<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'], 
                'items' => [
                    ['label' =>  Yii::t('common', 'Menu'), 'options' => ['class' => 'header']],

                    ['label' => Yii::t('common', 'Users'), 'icon' => 'circle-o', 'url' => ['/user/admin']],
                    ['label' => Yii::t('common', 'Labels'), 'icon' => 'circle-o', 'url' => ['/label']],
                    ['label' => Yii::t('common', 'Labels Categories'), 'icon' => 'circle-o', 'url' => ['/category']],
                    ['label' => Yii::t('common', 'Labels Subcategories'), 'icon' => 'circle-o', 'url' => ['/subcategory']],
                    ['label' => Yii::t('common', 'Orders'), 'icon' => 'circle-o', 'url' => ['/order'],],
                    ['label' => Yii::t('common', 'Canvases'), 'icon' => 'circle-o', 'url' => ['/canvas'],],
                    ['label' => Yii::t('common', 'Canvas Labels'), 'icon' => 'circle-o', 'url' => ['/canvas-labels'],],

                    ['label' => Yii::t('common', 'Surfaces'), 'icon' => 'circle-o', 'url' => ['/surface'],],
                    ['label' => Yii::t('common', 'Label Surfaces'), 'icon' => 'circle-o', 'url' => ['/label-surfaces'],],



                    ['label' => Yii::t('common', 'News'), 'icon' => 'circle-o', 'url' => ['/news'],],
                    ['label' => Yii::t('common', 'Articles'), 'icon' => 'circle-o', 'url' => ['/article'],],
                    ['label' => Yii::t('common', 'Top Menu'), 'icon' => 'circle-o', 'url' => ['/menu'],],
                    ['label' => Yii::t('common', 'Image editor'), 'icon' => 'circle-o', 'url' => ['/editor'],],
                    ['label' => Yii::t('common', 'Mailing lists'), 'icon' => 'circle-o', 'url' => ['/mailing'],],
                    ['label' => Yii::t('common', 'Html Blocks (Widgets)'), 'icon' => 'circle-o', 'url' => ['/html'],],
                    ['label' => Yii::t('common', 'Site Options'), 'icon' => 'circle-o', 'url' => ['/options'],],

                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    /*
                    [
                        'label' => 'Same tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    */

                ],
            ]
        ) ?>

    </section>

</aside>

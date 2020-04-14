<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username; ?></p>

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
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                   // ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                   // ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                   // ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    //['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Master Data',
                        'icon' => 'list ',
                        'url' => '#',
                        'items' => [


                            ['label' => 'Agama', 'icon' => 'circle-o', 'url' => ['/data-agama/index'],],
                            ['label' => 'Pendidikan', 'icon' => 'circle-o', 'url' => ['/data-pendidikan/index'],],
                            ['label' => 'Pekerjaan', 'icon' => 'circle-o', 'url' => ['/data-pekerjaan/index'],],
                            ['label' => 'Jenis Surat', 'icon' => 'circle-o', 'url' => ['/data-jenis-surat/index'],],
                            ['label' => 'Status Hubungan', 'icon' => 'circle-o', 'url' => ['/data-status-hubungan/index'],],
                            ['label' => 'Perangkat Desa', 'icon' => 'circle-o', 'url' => ['/data-perangkat-desa/index'],],
                            ['label' => 'Jenis Perangkat', 'icon' => 'circle-o', 'url' => ['/data-jenis-perangkat/index'],],
                            ['label' => 'Status Perkawinan', 'icon' => 'circle-o', 'url' => ['/data-status-perkawinan/index'],],
                            ['label' => 'Golongan Darah', 'icon' => 'circle-o', 'url' => ['/data-golongan-darah/index'],],
                            ['label' => 'Provinsi', 'icon' => 'circle-o', 'url' => ['/data-provinsi/index'],],
                            ['label' => 'Kabupaten', 'icon' => 'circle-o', 'url' => ['/data-kabupaten/index'],],
                            ['label' => 'Kecamatan', 'icon' => 'circle-o', 'url' => ['/data-kecamatan/index'],],
                            ['label' => 'Desa / Kelurahan', 'icon' => 'circle-o', 'url' => ['/data-desa-kelurahan/index'],],
                            ['label' => 'Dusun', 'icon' => 'circle-o', 'url' => ['/data-dusun/index'],],

                        ],
                    ],
                    [
                        'label' => 'Perangkat Desa',
                        'icon' => 'bank',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Kepala Desa', 'icon' => 'circle-o', 'url' => ['/kepala-desa/index'],],
                            ['label' => 'Sekretaris', 'icon' => 'circle-o', 'url' => ['/sekretaris-desa/index'],],

                        ],
                    ],
                    [
                        'label' => 'Kependukukan',
                        'icon' => 'users',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Kartu Keluarga', 'icon' => 'circle-o', 'url' => ['/data-kk/index'],],
                            ['label' => 'Penduduk', 'icon' => 'circle-o', 'url' => ['/data-penduduk/index'],],

                        ],
                    ],
                    [
                        'label' => 'Persuratan',
                        'icon' => 'envelope-open-o ',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Tidak Mampu', 'icon' => 'circle-o', 'url' => ['/tidak-mampu/index'],],

                        ],
                    ],

                ],
            ]
        ) ?>

    </section>

</aside>

<?php

use backend\models\Log;
use backend\widgets\Menu;

/* @var $this \yii\web\View */
?>
<aside class="main-sidebar">
    <section class="sidebar">
        <?= Menu::widget([
            'options' => ['class' => 'sidebar-menu'],
            'items' => [
                [
                    'label' => Yii::t('backend', 'Main'),
                    'options' => ['class' => 'header'],
                ],
                [
                    'label' => Yii::t('backend', 'Main menu'),
                    'url' => ['/site/index'],
                    'icon' => '<i class="fa fa-sitemap"></i>',
                ],
                [
                    'label' => Yii::t('backend', 'Eclass'),
                    'url' => '#',
                    'icon' => '<i class="fa fa-sitemap"></i>',
                    'items' => [
                        [
                            'label' => Yii::t('backend', 'Teachers'),
                            'url' => '',
                            'items' => [
                                [
                                    'label' => Yii::t('backend', 'Show teachers'),
                                    'url' => ['/teacher/index'],
                                    'icon' => '<i class="fa fa-eye"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Add teacher'),
                                    'url' => ['/teacher/create'],
                                    'icon' => '<i class="fa fa-plus"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Export teachers'),
                                    'url' => ['/teacher/export'],
                                    'icon' => '<i class="fa fa-file-excel-o"></i>'
                                ],
                            ]
                        ],
                        // [
                        //     'label' => Yii::t('backend', 'Teacher groups'),
                        //     'url' => '',
                        //     'items' => [
                        //         [
                        //             'label' => Yii::t('backend', 'Show teacher groups'),
                        //             'url' => ['/teacher-group/index'],
                        //             'icon' => '<i class="fa fa-eye"></i>'
                        //         ],
                        //         [
                        //             'label' => Yii::t('backend', 'Add group to a teacher'),
                        //             'url' => ['/teacher-group/create'],
                        //             'icon' => '<i class="fa fa-plus"></i>'
                        //         ],
                        //         [
                        //             'label' => Yii::t('backend', 'Export teacher groups'),
                        //             'url' => ['/teacher-group/export'],
                        //             'icon' => '<i class="fa fa-file-excel-o"></i>'
                        //         ],
                        //     ]
                        // ],
                        [
                            'label' => Yii::t('backend', 'Groups'),
                            'url' => '',
                            'items' => [
                                [
                                    'label' => Yii::t('backend', 'Show groups'),
                                    'url' => ['/group/index'],
                                    'icon' => '<i class="fa fa-eye"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Add group'),
                                    'url' => ['/group/create'],
                                    'icon' => '<i class="fa fa-plus"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Export groups'),
                                    'url' => ['/group/export'],
                                    'icon' => '<i class="fa fa-file-excel-o"></i>'
                                ],
                            ]
                        ],
                        [
                            'label' => Yii::t('backend', 'Students'),
                            'url' => '',
                            'items' => [
                                [
                                    'label' => Yii::t('backend', 'Show students'),
                                    'url' => ['/student/index'],
                                    'icon' => '<i class="fa fa-eye"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Add student'),
                                    'url' => ['/student/create'],
                                    'icon' => '<i class="fa fa-plus"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Export students'),
                                    'url' => ['/student/export'],
                                    'icon' => '<i class="fa fa-file-excel-o"></i>'
                                ],
                            ]
                        ],
                        [
                            'label' => Yii::t('backend', 'Subjects'),
                            'url' => '',
                            'items' => [
                                [
                                    'label' => Yii::t('backend', 'Show subjects'),
                                    'url' => ['/subject/index'],
                                    'icon' => '<i class="fa fa-eye"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Add subject'),
                                    'url' => ['/subject/create'],
                                    'icon' => '<i class="fa fa-plus"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Export subjects'),
                                    'url' => ['/subject/export'],
                                    'icon' => '<i class="fa fa-file-excel-o"></i>'
                                ],
                            ]
                        ],
                    ]
                ],
                [
                    'label' => Yii::t('backend', 'Info'),
                    'url' => '',
                    'icon' => '<i class="fa fa-info"></i>',
                    'items' => [
                        [
                            'label' => Yii::t('backend', 'Districts'),
                            'url' => '',
                            'icon' => '<i class="fa fa-vcard-o"></i>',
                            'items' => [
                                [
                                    'label' => Yii::t('backend', 'Show districts'),
                                    'url' => ['/district/index'],
                                    'icon' => '<i class="fa fa-eye"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Add district'),
                                    'url' => ['/district/create'],
                                    'icon' => '<i class="fa fa-plus"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Export districts'),
                                    'url' => ['/district/export'],
                                    'icon' => '<i class="fa fa-file-excel-o"></i>'
                                ],
                            ]
                        ],
                        [
                            'label' => Yii::t('backend', 'Study auditoriums'),
                            'url' => '',
                            'icon' => '<i class="fa fa-building-o"></i>',
                            'items' => [
                                [
                                    'label' => Yii::t('backend', 'Show auditoriums'),
                                    'url' => ['/auditorium/index'],
                                    'icon' => '<i class="fa fa-eye"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Add auditorium'),
                                    'url' => ['/auditorium/create'],
                                    'icon' => '<i class="fa fa-plus"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Export auditoriums'),
                                    'url' => ['/auditorium/export'],
                                    'icon' => '<i class="fa fa-file-excel-o"></i>'
                                ],
                            ]
                        ],
                        [
                            'label' => Yii::t('backend', 'Study days'),
                            'url' => '',
                            'icon' => '<i class="fa fa-building-o"></i>',
                            'items' => [
                                [
                                    'label' => Yii::t('backend', 'Show study days'),
                                    'url' => ['/study-day/index'],
                                    'icon' => '<i class="fa fa-eye"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Add study day'),
                                    'url' => ['/study-day/create'],
                                    'icon' => '<i class="fa fa-plus"></i>'
                                ],
                            ]
                        ],
                        [
                            'label' => Yii::t('backend', 'Study periods'),
                            'url' => '',
                            'icon' => '<i class="fa fa-bullhorn"></i>',
                            'items' => [
                                [
                                    'label' => Yii::t('backend', 'Show study periods'),
                                    'url' => ['/study-period/index'],
                                    'icon' => '<i class="fa fa-eye"></i>'
                                ],
                                [
                                    'label' => Yii::t('backend', 'Add study period'),
                                    'url' => ['/study-period/create'],
                                    'icon' => '<i class="fa fa-plus"></i>'
                                ],
                            ]
                        ],
                    ]
                ],
                [
                    'label' => Yii::t('backend', 'Timetable'),
                    'url' => '',
                    'icon' => '<i class="fa fa-sticky-note-o"></i>',
                    'items' => [
                        [
                            'label' => Yii::t('backend', 'Show timetables'),
                            'url'   => ['/timetable/index'],
                            'icon'  => '<i class="fa fa-spinner"></i>',
                        ],
                        [
                            'label' => Yii::t('backend', 'Assign a new schedule'),
                            'url'   => ['/timetable/index'],
                            'icon'  => '<i class="fa fa-eye"></i>',
                        ],
                        [
                            'label' => Yii::t('backend', 'Export timetable'),
                            'url'   => ['/timetable/create'],
                            'icon'  => '<i class="fa fa-plus"></i>',
                        ]
                    ]
                ],
                [
                    'label' => Yii::t('backend', 'System'),
                    'options' => ['class' => 'header'],
                ],
                [
                    'label' => Yii::t('backend', 'Users'),
                    'url' => ['/user/index'],
                    'icon' => '<i class="fa fa-users"></i>',
                    'visible' => Yii::$app->user->can('administrator'),
                ],
                [
                    'label' => Yii::t('backend', 'Other'),
                    'url' => '#',
                    'icon' => '<i class="fa fa-terminal"></i>',
                    'options' => ['class' => 'treeview'],
                    'items' => [
                        [
                            'label' => 'Gii',
                            'url' => ['/gii'],
                            'icon' => '<i class="fa fa-angle-double-right"></i>',
                            'visible' => YII_ENV_DEV,
                        ],
                        ['label' => Yii::t('backend', 'File manager'), 'url' => ['/file-manager/index'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        [
                            'label' => Yii::t('backend', 'DB manager'),
                            'url' => ['/db-manager/default/index'],
                            'icon' => '<i class="fa fa-angle-double-right"></i>',
                            'visible' => Yii::$app->user->can('administrator'),
                        ],
                        ['label' => Yii::t('backend', 'Key storage'), 'url' => ['/key-storage/index'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        ['label' => Yii::t('backend', 'Cache'), 'url' => ['/service/cache'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        ['label' => Yii::t('backend', 'Clear assets'), 'url' => ['/service/clear-assets'], 'icon' => '<i class="fa fa-angle-double-right"></i>'],
                        [
                            'label' => Yii::t('backend', 'Logs'),
                            'url' => ['/log/index'],
                            'icon' => '<i class="fa fa-angle-double-right"></i>',
                            'badge' => Log::find()->count(),
                            'badgeOptions' => ['class' => 'label-danger'],
                        ],
                    ],
                ],
            ],
        ]) ?>
    </section>
</aside>

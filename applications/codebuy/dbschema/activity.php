<?php

// +----------------------------------------------------------------------
// | VMCSHOP [V M-Commerce Shop]
// +----------------------------------------------------------------------
// | Copyright (c) vmcshop.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.vmcshop.com/licensed)
// +----------------------------------------------------------------------
// | Author: Shanghai ChenShang Software Technology Co., Ltd.
// +----------------------------------------------------------------------


$db['activity'] = array(
    'columns' => array(
        'id' => array(
            'type' => 'bigint unsigned',
            'required' => true,
            'pkey' => true,
            'extra' => 'auto_increment',
        ) ,
        'name' => array(
            'type' => 'varchar(200)',
            'required' => true,
            'default' => '',
            'label' => ('优购码名称') ,
            'is_title' => true,
            'searchtype' => 'has',
            'in_list' => true,
            'default_in_list' => true,
            'order' => '1',
        ),
        'intro' => array(
            'type' => 'text',
            'required' => true,
            'default' => '',
            'label' => ('优购码说明') ,
            'searchtype' => 'has',
        ),
        'batch' => array(
            'type' => 'varchar(200)',
            'required' => true,
            'default' => '',
            'label' => ('批次号') ,
            'is_title' => true,
            'searchtype' => 'has',
            'in_list' => true,
            'default_in_list' => true,
        ),
        'goods_id' => array(
            'type' => 'table:goods@b2c',
            'default' => 0,
            'required' => true,
            'label' => ('商品ID') ,
            'in_list' => true,
            'default_in_list' => true,
        ),
        'status'=>array(
            'type' => array(
                '0' => ('有效') ,
                '1' => ('暂停') ,
            ),
            'default'=>'0',
            'label'=>'是否启用',
            'order' => '4',
            'in_list' => true,
            'default_in_list' => true,
        ),
        'start' => array(
            'type' => 'time',
            'label' => ('开始时间') ,
            'in_list' => true,
            'orderby' => true,
            'default_in_list' => true,
            'order' => '6',
        ),
        'end' => array(
            'type' => 'time',
            'label' => ('结束时间') ,
            'in_list' => true,
            'orderby' => true,
            'default_in_list' => true,
            'order' => '6',
        ),
        'number' => array(
            'type' => 'number',
            'label' => ('每单限购数量') ,
            'in_list' => true,
            'default_in_list' => true,
            'default' => 1,
            'order' => '6',
        ),
        'code_number' => array(
            'type' => 'number',
            'label' => ('优购码数量') ,
            'in_list' => true,
            'default_in_list' => true,
            'default' => 0,
            'order' => '6',
        ),
    ),
    'index' => array(
        'ind_name' => array(
            'columns' => array(
                0 => 'name',
            ) ,
        ),
        'ind_time' => array(
            'columns' => array(
                0 => 'start',
                1 => 'end',
            ),
        ),
        'ind_goods_id' => array(
            'columns' => array(
                0 => 'goods_id'
            ),
        ),
    ) ,
    'engine' => 'innodb',
    'comment' => ('优购码活动') ,
);

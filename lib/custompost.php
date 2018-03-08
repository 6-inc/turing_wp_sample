<?php
/*-------------------------------------------------------------------------------------------*/
/* slider Post Type */
/*-------------------------------------------------------------------------------------------*/
class slider {
    function __construct() {
        add_action('init',array($this,'create_post_type'));
    }

    function create_post_type() {
        $labels = array(
            'name' => 'スライダー',
            'singular_name' => 'スライダー',
            'add_new' => '新規作成',
            'all_items' => '全スライダー',
            'add_new_item' => '新規作成',
            'edit_item' => '編集',
            'new_item' => '新規作成',
            'view_item' => '編集',
            'search_items' => '検索',
            'not_found' =>  'スライダーはありません',
            'not_found_in_trash' => 'ゴミ箱にありません。',
            'parent_item_colon' => '親',
            'menu_name' => 'スライダー'
        );
        $args = array(
            'labels' => $labels,
            'description' => "",
            'public' => true,
            'exclude_from_search' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'show_in_nav_menus' => true,
            'show_in_menu' => true,
            'show_in_admin_bar' => true,
            'menu_position' => 20,
            'menu_icon' => null,
            'capability_type' => 'post',
            'hierarchical' => true,
            'supports' => array('title','editor','thumbnail','custom-fields'),
            'has_archive' => false,
            'rewrite' => array('slug' => 'slider'),
            'query_var' => true,
            'can_export' => true
        );
        register_post_type('slider',$args);
    }
}

$slider = new slider();

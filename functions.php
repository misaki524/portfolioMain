<?php
function create_post_type_news() {
    $labels = array(
        'name' => '制作実績',
        'singular_name' => '制作実績',
        'menu_name' => '制作実績',
        'name_admin_bar' => '制作実績',
        'add_new' => '追加',
        'add_new_item' => '新規制作実績を追加',
        'new_item' => '新しい制作実績',
        'edit_item' => '制作実績を編集',
        'view_item' => '制作実績を表示',
        'all_items' => '全ての制作実績',
        'search_items' => '制作実績を検索',
        'parent_item_colon' => '親制作実績:',
        'not_found' => '制作実績が見つかりません。',
        'not_found_in_trash' => 'ゴミ箱に制作実績はありません。',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'news'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'show_in_rest' => true,
    );

    register_post_type('news', $args);
}
add_action('init', 'create_post_type_news');
function my_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

?>

<?php
/**
 * 
 * Plugin Name: Post-for-X
 * Description: X(twitter)へ過去の記事を自動で投稿します
 * Author: yamayama.jp
 * Version: 1.0.1
 */


  add_action('admin_menu', function(){
    add_menu_page(
      'Post for X',
      'Post for X',
      'manage_options',
      'post_for_x_dashboard',
      'post_for_x_dashboard',
      'dashicons-twitter',
      99
    );

  });

  function post_for_x_dashboard() {
    if (current_user_can('manage_options')) {
        include(plugin_dir_path(__FILE__) . 'dashboard.php');
    } else {
        wp_die( __('この設定ページのアクセス権限がありません') );
    }
}

add_action('admin_init', 'my_tweet_plugin_settings');

function my_tweet_plugin_settings() {
    // Twitter API Key
    register_setting('my_tweet_plugin_settings', 'my_tweet_api_key');

    // Twitter API Secret
    register_setting('my_tweet_plugin_settings', 'my_tweet_api_secret');

    // その他の設定項目があればここで追加
}
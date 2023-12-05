<?php
/**
 * 
 * Plugin Name: Post-for-X
 * Description: X(twitter)へ過去の記事を自動で投稿します
 * Author: yamayama.jp
 * Version: 1.0.1
 */


  add_action('amin_menu', function(){
    add_menu_page(
      'Post for X',
      'Post for X',
      'My_Plugin_page',
      'show_my_plugin_page',
      'dashicons-admin-generic',
      0
    );

  });

  function show_my_plugin_page() {
    echo '<h2>自動でX(twitter)へ投稿してくれます</h2>';
  }
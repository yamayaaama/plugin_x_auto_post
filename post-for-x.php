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
      'my_plugin_page',
      'show_my_plugin_page',
      'dashicons-twitter',
      80
    );

  });

  //メニューを表示する関数
function show_my_plugin_page(){

  ?>
  <!-- ここにHTML等を記述 -->
  
  <h2>X(twitter)へ自動投稿する設定をしよう！</h2>
  
  <?php
  
  }
  
  ?>
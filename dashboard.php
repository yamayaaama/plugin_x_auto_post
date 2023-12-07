<?php 
?>
<div class="wrap">
<h1>Post for X の設定です</h1>
<form method="post" action="options.php">
    <?php
    // WordPress設定 API を使用してセキュリティ対策済みの設定フィールドを追加
    settings_fields('my_tweet_plugin_settings');
    do_settings_sections('my_tweet_plugin_settings');
    ?>
    <table class="form-table">
        <tr valign="top">
            <th scope="row">Twitter API Key</th>
            <td>
                <input type="text" name="my_tweet_api_key" value="<?php echo esc_attr(get_option('my_tweet_api_key')); ?>" />
            </td>
        </tr>
        <tr valign="top">
            <th scope="row">Twitter API Secret</th>
            <td>
                <input type="text" name="my_tweet_api_secret" value="<?php echo esc_attr(get_option('my_tweet_api_secret')); ?>" />
            </td>
        </tr>
    </table>
    <?php submit_button(); ?>
</form>
</div>
<?php

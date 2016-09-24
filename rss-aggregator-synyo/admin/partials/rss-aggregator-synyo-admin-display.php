<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/anvari182
 * @since      1.0.0
 *
 * @package    Rss_Aggregator_Synyo
 * @subpackage Rss_Aggregator_Synyo/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="wrap">

    <h2><?php echo esc_html(get_admin_page_title()); ?></h2>

    <form method="post" name="rss_aggregator_options" action="options.php">

        <!-- add srouce to show on each link -->
        <fieldset>
            <legend class="screen-reader-text"><span>Show Source Section</span></legend>
            <label for="<?php echo $this->plugin_name; ?>-source">
                <input type="checkbox" id="<?php echo $this->plugin_name; ?>-source" name="<?php echo $this->plugin_name; ?> [source]" value="1"/>
                <span><?php esc_attr_e('Show Source for each Post', $this->plugin_name); ?></span>
            </label>
        </fieldset>



        <!-- load jQuery from CDN -->

            <fieldset>
                <p>Please separate your rss url with ","  like http://example.com/rss,http://example2.com/rss</p>
                 <legend class="screen-reader-text"><span><?php _e('add your rss url', $this->plugin_name); ?></span></legend>
                <input type="url" class="regular-text" id="<?php echo $this->plugin_name; ?>-cdn_provider" name="<?php echo $this->plugin_name; ?>[rss_url]" value=""/>
            </fieldset>


        <?php submit_button('Save all changes', 'primary','submit', TRUE); ?>

    </form>

</div>

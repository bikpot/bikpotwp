<?php
global $adforest_theme;
if (wp_is_mobile() || !$adforest_theme['sb_radius_search']) {
    $sb_search_page = apply_filters('adforest_language_page_id', $adforest_theme['sb_search_page']);
    ?>

    <?php adforest_advance_search_map_container_open(); ?>
    <div class="col-md-4 col-xs-12 col-sm-4">
        <form method="get" action="<?php echo get_the_permalink($sb_search_page); ?>">
            <div class="form-group">
                <label><?php echo esc_html($title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title'])); ?></label>
                <div class="input-group add-on">
                    <input class="form-control" placeholder="<?php echo esc_html($title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title'])); ?>" type="text" name="location" value="<?php echo esc_attr($location); ?>" id="sb_user_address" />
                    <div class="input-group-btn">
                        <button class="btn btn-default custom_padding" type="submit" id="radius_search" ><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                </div>
            </div>
            <?php
            echo adforest_search_params('location');
            ?>
        </form>
        <?php
        adforest_widget_counter();
        ?>
    </div>
    <?php
    adforest_advance_search_map_container_close();
    adforest_advance_search_container();
}
?>
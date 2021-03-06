<?php
$pid = get_the_ID();
$uid = get_current_user_id();
global $adforest_theme;
$media = adforest_get_ad_images($pid);
if ((get_post_field('post_author', $pid) == $uid || current_user_can('administrator') ) && get_post_meta($pid, '_adforest_ad_status_', true) == 'active' && count($media) > 1) {
    ?>
<div role="alert" class="alert alert-info alert-dismissible <?php echo adforest_alert_type();?>">
    <button aria-label="Close" data-dismiss="alert" class="close" type="button"><span aria-hidden="true">&#10005;</span></button>
    <a data-toggle="modal" data-target=".sortable-images"><?php echo __('Rearrange the ad photos.', 'adforest');?></a>
</div>
<?php } ?>
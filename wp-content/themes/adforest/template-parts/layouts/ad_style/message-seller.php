<?php
$pid = get_the_ID();
$poster_id = get_post_field('post_author', $pid);
global $adforest_theme;
?>
<div class="modal fade price-quote" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <span class="modal-title" id="lineModalLabel"><?php the_title();?>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&#10005;</span>
                    <span class="sr-only">Close</span>
                </button>
            </span>
        </div>
        <div class="modal-body">
            <?php   $user_info = get_userdata(get_current_user_id()); 
                $display_name = $user_email = '';
                if($user_info)
                {
                    $display_name = $user_info->display_name;
                    $user_email   = $user_info->user_email;
                }
                              
                $allow_attachment    =   isset($adforest_theme['allow_media_upload_messaging'])  ?  $adforest_theme['allow_media_upload_messaging']   : false;
                
                
                
                $attachment_html   =  "";
               if($allow_attachment){
               $attachment_html   =     '<div id="attachment-wrapper" class="attachment-wrapper"></div>           
                                       <div class="file_attacher" id="file_attacher">
                                         <a href="javascript:void(0)" class="msgAttachFile dz-clickable"><i class="fa fa-link"></i>'. esc_html__('Add Attachment','adforest').'</a>
                                         
                                         </div>                             
                                    ';
              }  
                
                ?>
            <form id="send_message_pop" >
                <div class="form-group  col-md-12  col-sm-12 no-display">
                    <label><?php echo __('Your Name', 'adforest');?></label>
                    <input type="text" name="name" readonly class="form-control" value="<?php echo esc_attr($display_name);?>"> 
                </div>
                <div class="form-group  col-md-12  col-sm-12 no-display">
                    <label><?php echo __('Email Address', 'adforest');?></label>
                    <input type="email" name="email" readonly class="form-control" value="<?php echo esc_attr($user_email);?>"> 
                </div>
                <div class="form-group  col-md-12  col-sm-12">
                    <label><?php echo __('Message', 'adforest');?></label>
                    <textarea id="sb_forest_message" name="message" placeholder="<?php echo __('Type here...', 'adforest');?>" rows="3" class="form-control" data-parsley-required="true" data-parsley-error-message="<?php echo __('This field is required.', 'adforest');?>"></textarea>
                
                </div>

                <div class="form-group  col-md-12  col-sm-12">
                 <?php if($allow_attachment){ 
                 echo   $attachment_html;
             }  ?>
                    </div>

                <div class="clearfix"></div>
                <div class="col-md-12  col-sm-12 margin-bottom-20 margin-top-20">
                    <input type="hidden" name="ad_post_id"       id="ad_post_id" value="<?php echo esc_attr($pid);?>" />
                    <input type="hidden" name="usr_id"           id="user_id" value="<?php echo get_current_user_id();?>" />
                    <input type="hidden" name="msg_receiver_id"  id="msg_receiver_id" value="<?php echo esc_attr($poster_id);?>" />
                    <input type="hidden" id="sb-msg-token" value="<?php echo wp_create_nonce('sb_msg_secure') ;?>" />
                    <button type="submit" id="send_ad_message" class="btn btn-theme btn-block"><?php echo __('Submit', 'adforest');?></button>
                </div>
            </form>      
            
            
        </div>
    </div>
</div>
</div>



<?php global $adforest_theme;?>
<?php get_template_part('template-parts/layouts/top', 'bar');?>
<div class="sb-black-header">
<div class="sb-header">
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-8 col-xs-3 no-padding"><div class="logo"><?php get_template_part('template-parts/layouts/site', 'logo');?></div>
            </div>
<div class="col-md-1 col-sm-4 col-xs-1 no-padding">
<a href="\" class=" hmbtn"><i class="fa fa-home fa-2x" aria-hidden="true"></i></a>
</div>

<div class="col-md-4 col-sm-3 col-xs-8">
                
                <!--<a href="https://bikpot.com/search-results/?condition=New" class=" btn btn-danger"><i class="fa fa-filter fa-2x " aria-hidden="true"></i>New</a>
                
            
                <a href="https://bikpot.com/search-results/?condition=Used" class=" btn btn-success"><i class="fa fa-filter fa-2x " aria-hidden="true"></i>Used</a>-->
                <div style="display:flex;  background-color:#fff; padding:5px 10px; color:#f00; flex-wrap: nowrap; align-content: stretch; justify-content: space-between;">
                <a href="https://bikpot.com/bkp-tokens/"><img height="40px;" src="https://bikpot.com/wp-content/uploads/bkp-token-animated-5.gif" alt="token" id="bkptoken"></a>
                </div>
            </div>

            <div class="col-md-4 col-sm-8 col-xs-12">
                <?php
                if (isset($adforest_theme['search_in_header']) && $adforest_theme['search_in_header']) {
                    $search_title = '';
                    if (isset($_GET['ad_title']) && $_GET['ad_title'] != "")
                        $search_title = $_GET['ad_title'];
                        $sb_search_page = apply_filters('adforest_language_page_id', $adforest_theme['sb_search_page']);
                    ?>
                    <form method="get" action="<?php echo urldecode(get_the_permalink($sb_search_page));?>">
                        <div class="input-group">
                            <input placeholder="<?php echo __('Find Cars, Mobile Phones & more... ', 'adforest');?>" type="text" name="ad_title" class="form-control" value="<?php echo esc_attr($search_title);?>" autocomplete="off"><span class="input-group-btn">
                                <?php apply_filters('adforest_form_lang_field', true)?>
                                <button class="btn btn-danger" type="submit"><?php //echo __('Search', 'adforest');?><i class="fa fa-search" aria-hidden="true"></i></button>
                            </span> 
                        </div>
                    </form>  
                    <?php
                }
                ?>
            </div>
            
            <div class="col-md-2 col-sm-3 no-padding col-xs-12">
                <?php
                if (isset($adforest_theme['ad_in_menu']) && $adforest_theme['ad_in_menu']) {
                    $btn_text = __('Sell', 'adforest');
                    if (isset($adforest_theme['ad_in_menu_text']) && $adforest_theme['ad_in_menu_text'] != "") {
                        $btn_text = $adforest_theme['ad_in_menu_text'];
                    }
                    $sb_post_ad_page = apply_filters('adforest_ad_post_verified_id', $adforest_theme['sb_post_ad_page']);
                    $sb_post_ad_page = apply_filters('adforest_language_page_id', $sb_post_ad_page);
                    $sb_ad_post_url = isset($sb_post_ad_page) && !empty($sb_post_ad_page) ? apply_filters('adforest_ad_post_verified_link',get_the_permalink($sb_post_ad_page)) : home_url('/');
                    ?>
                    <a href="<?php echo esc_url($sb_ad_post_url);?>" class="btn btn-orange btn-block"><i class="fa fa-tags" aria-hidden="true"></i><?php echo esc_html($btn_text);?> </a>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<div class="sb-elegent-black">
    <div class="sb-main-menu">
        <nav id="menu-1" class="mega-menu">
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <ul class="menu-logo">
                                <li>
                                    <?php get_template_part('template-parts/layouts/site', 'logo');?>
                                </li>
                            </ul>
                            <?php get_template_part('template-parts/layouts/main', 'nav');?>
                            <ul class="menu-search-bar hidden"><li class="hidden-xs"><?php get_template_part('template-parts/layouts/ad', 'button');?></li></ul>
                        </div>
                        
                    </div>
                   
                </div>      
            </section>
        </nav>
    </div>
    
    <div class="clearfix"></div>
    
</div>
	
</div>	
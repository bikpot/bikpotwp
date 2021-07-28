<?php
global $adforest_theme, $template;
$page_template = basename($template);
if (!function_exists('adforest_footer_content_html')) {
    function adforest_footer_content_html() {
        global $adforest_theme;
        if (isset($adforest_theme['design_type']) && $adforest_theme['design_type'] == 'modern' && isset($adforest_theme['search_design']) && $adforest_theme['search_design'] == 'map' && is_page_template('page-search.php')) {       
        } else {
            $layout = 'default';
            if (isset($adforest_theme['footer_style'])) {
                $layout = $adforest_theme['footer_style'];
            }
            get_template_part('template-parts/layouts/footer', $layout);
        }
    }
}
do_action('adforestAction_footer_content', 'adforest_footer_content_html');

 wp_footer();?>    
</body>
</html>
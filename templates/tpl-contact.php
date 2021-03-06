<?php 
/**
 * The template for displaying section contact on homepage
 * 
 * @package nautilusnet
 */

$page               = get_page_by_title('Estamos disponíveis em várias plataformas para te atender melhor');
// $page               = get_post('19');
$page_id            = $page->ID;
$page_title         = $page->post_title;
$page_subtitle      = get_post_meta($page_id, 'subtitle_page', true);
$page_description   = $page->post_excerpt;
$page_content       = $page->post_content;
$page_thumb_url     = get_the_post_thumbnail_url($page);
?>
<section id="contact" data-wow-delay=".1s" class="wow fadeIn container-fluid sct__contact">
    <header class="row sctHeader">
        <h1 class="sctHeader__title sctHeader__title--big" title=""><?php echo sanitize_text_field($page_title) ?></h1>
        <p class="sctHeader__subtitle"><?php echo sanitize_text_field($page_content) ?></p>
    </header>

    <div class="row sct__contentWrapper">
        <div class="row col-lg-9">
            <?php 
            if( shortcode_exists('show_contact_section') ){
                do_shortcode('[show_contact_section]');
            }
            ?>
        </div>
    </div>
</section>
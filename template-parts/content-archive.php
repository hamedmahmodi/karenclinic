<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package karenclinic
 */

?>

<a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('highRadius mediumMargined whiteBg'); ?>>
	<div class="archiveCardImg"><?php the_post_thumbnail() ?></div>
	<div class="cardText">
        <header class="entry-header">
            <?php if ( is_home() && ! is_front_page() ){ ?>
                <h2 class="entry-title"><?php echo get_the_title() ?></h2>
            <?php } else{ ?>
                <h3 class="entry-title"><?php echo get_the_title() ?></h3>
            <?php } ?>
        </header><!-- .entry-header -->
        <div class="archivePostFooter">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 7v5l2.5 1.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            <span><?php echo get_the_date() ?></span>
        </div>
        <?php the_excerpt(); ?>
	
        <div class="readMore">
            <span>ادامه مطلب</span>
            <svg width="16" height="16" viewBox="0 0 0.375 0.375" xmlns="http://www.w3.org/2000/svg" transform="rotate(180)"><path d="M.207.057a.025.025 0 0 1 .035 0L.355.17a.025.025 0 0 1 0 .035L.242.318A.025.025 0 0 1 .207.283l.068-.07H.038a.025.025 0 0 1 0-.05h.237L.207.093a.025.025 0 0 1 0-.035Z"/></svg>
        </div>
    </div>
	
</a><!-- #post-<?php the_ID(); ?> -->
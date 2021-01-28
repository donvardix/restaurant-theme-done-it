<?php get_header(); ?>

<header class="restmdoneit_header">
    <div class="restmdoneit_logo">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/restaurant-theme-done-it/demo-data/images/logo.png" alt="logo" />
    </div>
    <div class="restmdoneit_title">
        <span>Restaurant</span>
        <h1>hungry people</h1>
        <hr />
    </div>
    <div class="restmdoneit_multilingual">
        <?php dynamic_sidebar( 'multilingual' ); ?>
    </div>
    <div class="restmdoneit_down_btn">
        <i class="bi bi-arrow-down-circle-fill" style="font-size: 40px;"></i>
    </div>
</header>
<div class="container">
    <div class="restmdoneit_about_us row">
        <div class="restmdoneit_text_block col-xl-6">
            <?php dynamic_sidebar( 'text-block' ); ?>
        </div>
        <div class="restmdoneit_image_block col-xl-6">
            <?php dynamic_sidebar( 'image-block' ); ?>
        </div>
    </div>
    <div class="restmdoneit_contact">
        <div class="restmdoneit_contact_text">
            <?php dynamic_sidebar( 'contact' ); ?>
        </div>
        <div class="restmdoneit_contact_plugin">
            <?php dynamic_sidebar( 'cf7' ); ?>
        </div>
    </div>
</div>
<footer class="restmdoneit_footer">
    <?php dynamic_sidebar( 'footer' ); ?>
</footer>

<?php get_footer(); ?>
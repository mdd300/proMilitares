<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
?>
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Top Menu', 'twentyseventeen'); ?>">
    <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
        <?php
        echo twentyseventeen_get_svg(array('icon' => 'bars'));
        echo twentyseventeen_get_svg(array('icon' => 'close'));
        _e('Menu', 'twentyseventeen');
        ?>
    </button>

    <?php
    wp_nav_menu(array(
        'theme_location' => 'top',
        'menu_id' => 'top-menu',
    ));
    ?>

<?php if (( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && has_custom_header()) : ?>
        <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about"><?php echo twentyseventeen_get_svg(array('icon' => 'arrow-right')); ?></a>
        </li>
<?php endif; ?>
</nav><!-- #site-navigation -->

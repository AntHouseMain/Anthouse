<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package anthouse
 */

?>

<section class="no-results not-found uk-margin-medium-bottom">
    <header class="page-header">
        <h1 class="page-title uk-text-center"><?php esc_html_e('Nothing Found', 'anthouse'); ?></h1>
    </header><!-- .page-header -->

    <div class="page-content">
        <?php
        if (is_home() && current_user_can('publish_posts')) : ?>

            <p><?php
                printf(
                    wp_kses(
                    /* translators: 1: link to WP admin new post page. */
                        __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'anthouse'),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ),
                    esc_url(admin_url('post-new.php'))
                );
                ?></p>

        <?php elseif (is_search()) : ?>

            <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'anthouse'); ?></p>
            <?php
            get_search_form();

        else : ?>

            <p class="uk-text-center"><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'anthouse'); ?></p>
            <?php
            echo '<div class="uk-text-center">';
            get_search_form();
            echo '</div>';
        endif; ?>
    </div><!-- .page-content -->
</section><!-- .no-results -->

<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package appside
 */

get_header();
?>

<div id="primary" class="content-area error_page_content_area padding-top-110 padding-bottom-110">
    <main id="main" class="site-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="error-404 not-found">
                        <h2 class="title">Page not found</h2>
                        <div class="btn-wrapper desktop-center margin-top-30">
                            <a class="boxed-btn" href="<?php echo esc_url(home_url('/')); ?>">Go Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();

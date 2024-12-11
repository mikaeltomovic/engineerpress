<?php
/**
 * Title: Page Hero
 * Slug: engineerpress/page-hero
 * Categories: engineerpress
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Description: A simple hero section with a heading, paragraph and arrow link.
 */
?>

<!-- wp:engineerpress/page-section -->
<section class="wp-block-engineerpress-page-section alignwide">
    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0">
        <!-- wp:heading {"level":1} -->
        <h1 class="wp-block-heading">An H1 heading</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem"}}} -->
        <p style="font-size:1.5rem">A paragraph, size 1.5rem</p>
        <!-- /wp:paragraph -->

        <!-- wp:engineerpress/arrow-link -->
        <div class="wp-block-engineerpress-arrow-link">
            <!-- wp:paragraph {"placeholder":"Insert a link here.","style":{"typography":{"fontSize":"1.5rem"}}} -->
            <p style="font-size:1.5rem"><a href="#"><strong>An arrow link</strong></a></p>
            <!-- /wp:paragraph --></div>
        <!-- /wp:engineerpress/arrow-link --></div>
    <!-- /wp:group --></section>
<!-- /wp:engineerpress/page-section -->
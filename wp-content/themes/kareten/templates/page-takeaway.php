<?php
/* Template Name: Take Away */
get_header();
?>
<div class="kareten_section">
    <div class="kareten-container">
            <div class="kareten-col content-col">
                <div class="karaten-wrap">
                    <h2 class="karaten-page-title">
                        <?= get_the_title(); ?>
                    </h2>
                    <?php 
                    the_content();
                    ?>
                </div>
            </div>
            <div class="kareten-col widget">
                <?php get_template_part('template-parts/page','sidebar'); ?>
            </div>
    </div>        
</div>

<?php get_footer(); 
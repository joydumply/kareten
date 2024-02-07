<?php 
get_header();
$category = get_queried_object();
$fields = get_fields('category_'.$category->term_id);

$category_title = single_cat_title('', false);
$top_image = '';
if(!empty($fields['top_image'])){
    $top_image = is_array($fields['top_image']) ?  $fields['top_image']['url'] : $fields['top_image'];
}
?>

<div class="kareten-category-page-wrap">
    <div class="kareten-category-top-section" style="background-image: url(<?= $top_image; ?>);">
        <div class="kareten-background-overlay"></div>
        <h2 class="kareten-category-title">
            <?= $category_title ; ?>
        </h2>
    </div>

    <section class="kareten-section">
        <div class="kareten-wrap">
            <h2 class="kareten-heading-title">
                <?= $category_title ; ?>
            </h2>

            <div class="kareten-container">
                <?php 
                $args = array(
                    'cat' => $category->term_id,
                    'posts_per_page' => -1
                );
                $query = new WP_Query($args);
                if ($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
                        $title = get_the_title();
                        $thumbnail = get_the_post_thumbnail();
                        $permalink = get_permalink();
                        $post_args = array(
                            'title' => $title,
                            'thumbnail' => $thumbnail,
                            'permalink' => $permalink
                        );

                        get_template_part('template-parts/jul-nytar-post','item', $post_args);
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/category','slider'); ?>
</div>

<?php get_footer();
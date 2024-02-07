<?php 
/* 
Template Name: Drikkevarer
*/
get_header();

$fields = get_fields();
?>

<div class="kareten_section">
    <div class="kareten-container">
        <div class="kareten-col content-col">
            <div class="karaten-wrap">
                <h2 class="karaten-page-title">
                    <?= get_the_title(); ?>
                </h2>


                <?php if(!empty($fields['table_title'])): ?>
                    <div class="karaten-sub-title">
                        <?= esc_html( $fields['table_title']); ?>
                    </div>
                <?php endif; ?>

                <?php if(!empty($fields['table_row'])): ?>
                <div class="karaten-table-wrap">
                    <table>
                        <tbody>
                            <?php foreach($fields['table_row'] as $row): ?>
                            <tr>
                                <td>
                                    <img src="<?= $row['image'] ?>" alt="">
                                </td>
                                <td>
                                    <?= $row['column_1'] ?>
                                </td>
                                <td>
                                    <?= $row['column_2'] ?>
                                </td>
                                <td>
                                    <?= $row['column_3'] ?>
                                </td>
                                <td>
                                    <?= $row['column_4'] ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php endif; ?>

                <?php if(isset($fields['section_title']) && !empty($fields['section_title'])): ?>
                    <div class="karaten-sub-title">
                        <?= esc_html( $fields['section_title']); ?>
                    </div>
                <?php endif; ?>

                <?php if(isset($fields['section_field']) && !empty($fields['section_field'])): ?>
                    <div class="karaten-section-field">
                        <?=  $fields['section_field'] ?>
                    </div>
                <?php endif; ?>

                <?php if(isset($fields['section_additional_description']) && !empty($fields['section_additional_description'])): ?>
                    <div class="karaten-common-section">
                        <?= $fields['section_additional_description']; ?>
                    </div>
                <?php endif; ?>

                <div class="karaten-tables">
                    <?php if(isset($fields['rom_section']) && !empty($fields['rom_section'])): 
                        $rom = $fields['rom_section'];
                        ?>
                        <div class="karaten-sub-title">
                            <?= esc_html( $rom['title']); ?>
                        </div>

                        <div class="karaten-table-wrap">
                        <table>
                            <tbody>
                                <?php foreach($rom['table_row'] as $row): ?>
                                <tr>
                                    <td>
                                        <?= $row['column_1'] ?>
                                    </td>
                                    <td>
                                        <?= $row['column_2'] ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php endif; ?>

                    <?php if(isset($fields['gin_section']) && !empty($fields['gin_section'])): 
                        $gin = $fields['gin_section'];
                        ?>
                        <div class="karaten-sub-title">
                            <?= esc_html( $gin['title']); ?>
                        </div>

                        <div class="karaten-table-wrap">
                        <table>
                            <tbody>
                                <?php foreach($gin['table_row'] as $row): ?>
                                <tr>
                                    <td>
                                        <?= $row['column_1'] ?>
                                    </td>
                                    <td>
                                        <?= $row['column_2'] ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                    <?php endif; ?>

                    <?php if(isset($fields['vine_section']) && !empty($fields['vine_section'])): 
                        $vine = $fields['vine_section'];
                        ?>
                        <div class="karaten-sub-title">
                            <?= esc_html( $vine['title']); ?>
                        </div>
                        

                        <?php if(isset($vine['vine_variety']) && !empty($vine['vine_variety'])): 
                            foreach($vine['vine_variety'] as $variety):
                            ?>
                            <div class="karaten-sub-title align-left">
                                <?= esc_html( $variety['title']); ?>
                            </div>

                            <div class="karaten-table-wrap">
                                <table>
                                    <tbody>
                                        <?php 
                                        if(!empty($variety['row'])):
                                            foreach($variety['row'] as $row):
                                        ?>
                                                <tr>
                                                    <td>
                                                        <?= $row['column_1'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['column_2'] ?>
                                                    </td>
                                                </tr>
                                        <?php
                                            endforeach; 
                                        endif;
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        <?php 
                        endforeach;
                        endif; 
                        ?>
                        

                        <?php 
                        if(isset($fields['book_btn']) && !empty($fields['book_btn'])):
                        ?>
                        <a href="<?= $fields['book_btn']['link'] ?>" class="book_btn"><?= $fields['book_btn']['label']?></a>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
                


            </div>
        </div>

        
        <div class="kareten-col widget">
            <?php get_template_part('template-parts/page','sidebar'); ?>
        </div>
    </div>
</div>

<?php get_footer();
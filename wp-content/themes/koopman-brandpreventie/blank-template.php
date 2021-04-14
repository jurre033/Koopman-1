<?php
/**
Template name: Blank Template
 */
get_header();
?>

<?php

// Check value exists.
if( have_rows('flexible_content') ):

    // Loop through rows.
    while ( have_rows('flexible_content') ) : the_row();


        // Case: Paragraph layout.
        if( get_row_layout() == 'textblock_one_col' ):
            $text = get_sub_field('title');
            $content = get_sub_field('content');


        endif;

        // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

?>

<div class="section">
    <div class="container">
        <?php echo $text; ?>
        <?php echo $content; ?>
    </div>
</div>

<?php
get_footer();

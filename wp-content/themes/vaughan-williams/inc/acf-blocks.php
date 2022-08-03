<?php
//Disable Gutenberg for letters
add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    $post_types = ['letter', 'who-we-are', 'publisher'];
    if (in_array($post_type, $post_types)) return false;
    return $current_status;
}


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // Fullwidth Image
        acf_register_block_type(array(
            'name'              => 'fullwidth_image',
            'title'             => __('Fullwidth Image'),
            'description'       => __('Fullwidth Image block.'),
            'render_template'   => 'block-templates/includes/fullwidth-image-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'image', 'fullwidth' )
        ));

        // Letter of the day
        acf_register_block_type(array(
            'name'              => 'letter_of_the_day',
            'title'             => __('Letter of the Day'),
            'description'       => __('Letter of the Day block.'),
            'render_template'   => 'block-templates/includes/letter-of-the-day-block.php',
            'align'           => 'full',
            'mode'          => 'preview',
            'supports'      => [
                //'align'         => true,
                'anchor'        => true,
                'customClassName'   => true,
                'jsx'           => true,
            ],
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'letter of the day', 'letter' )
        ));

        // In the News
        acf_register_block_type(array(
            'name'              => 'in_the_news',
            'title'             => __('In The News'),
            'description'       => __('In the News block.'),
            'render_template'   => 'block-templates/includes/in-the-news-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'in the news', 'news' )
        ));

        // Testimonial
        acf_register_block_type(array(
            'name'              => 'testimonial',
            'title'             => __('Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_template'   => 'block-templates/includes/testimonial-slider-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
            /*'supports'        => [
                'align'           => [ 'full' ],
                'jsx'             => true,
                'color'           => true,
            ], */
        ));

        // Text Block
        acf_register_block_type(array(
            'name'              => 'text_block',
            'title'             => __('Text Block'),
            'description'       => __('Text block.'),
            'render_template'   => 'block-templates/includes/text-block-gut.php',
            'mode'          => 'preview',
            'supports'      => [
                'align'         => false,
                'anchor'        => true,
                'customClassName'   => true,
                'jsx'           => true,
            ],
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'keywords'        => array('button', 'text'),
        ));

        // Text an Image Block
        acf_register_block_type(array(
            'name'              => 'text_image_block',
            'title'             => __('Text and Image Block'),
            'description'       => __(''),
            'render_template'   => 'block-templates/includes/image-text-block.php',
            'mode'          => 'preview',
            'align'           => 'full',
            'supports'      => [
                //'align'         => false,
                'anchor'        => true,
                'customClassName'   => true,
                'jsx'           => true,
            ],
            'category'        => 'formatting',
            'icon'            => 'admin-comments',
            'keywords'        => array('text and image', 'image'),
        ));
    }
}
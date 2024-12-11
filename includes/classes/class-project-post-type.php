<?php
/**
 * Project post type.
 * 
 * @package engineerpress
 */

namespace EngineerPress;

class Project_Post_Type extends Loader {
    /**
     * The post type slug.
     * 
     * @var string
     */
    public string $slug = 'project';

    /**
     * Add hooks and filters here.
     * 
     * @return void
     */
    public function init() : void {
        add_action( 'init', [ $this, 'register_post_type' ] );
    }

    /**
     * Register the post type.
     */
    public function register_post_type() : void {
        register_post_type(
            $this->slug,
            [
                'labels' => [
                    'name' => esc_html__('Projects', 'engineerpress'),
                    'singular_name' => esc_html__('Project', 'engineerpress'),
                    'add_new' => esc_html__('Add New Project', 'engineerpress'),
                    'add_new_item' => esc_html__('Add New Project', 'engineerpress'),
                    'edit_item' => esc_html__('Edit Project', 'engineerpress'),
                    'new_item' => esc_html__('New Project', 'engineerpress'),
                    'view_item' => esc_html__('View Project', 'engineerpress'),
                    'view_items' => esc_html__('View Projects', 'engineerpress'),
                    'search_items' => esc_html__('Search Projects', 'engineerpress'),
                    'not_found' => esc_html__('No Projects found', 'engineerpress'),
                    'not_found_in_trash' => esc_html__('No Projects found in Trash', 'engineerpress'),
                    'all_items' => esc_html__('All Projects', 'engineerpress'),
                    'archives' => esc_html__('Project Archives', 'engineerpress'),
                    'attributes' => esc_html__('Project Attributes', 'engineerpress'),
                    'insert_into_item' => esc_html__('Insert into Project', 'engineerpress'),
                    'uploaded_to_this_item' => esc_html__('Uploaded to this Project', 'engineerpress'),
                    'filter_items_list' => esc_html__('Filter Projects list', 'engineerpress')
                ],
                'public' => true,
                'show_in_rest' => true,
                'menu_position' => 3,
                'menu_icon' => 'dashicons-feedback',
                'supports' => [ 'title', 'editor', 'thumbnail', 'excerpt' ],
                'has_archive' => true,
                'rewrite' => [ 'slug' => 'projects' ],
                'delete_with_user' => false,
                'template' => [
                    [
                        'core/pattern',
                        [
                            'slug' => 'engineerpress/project-hero'
                        ]
                    ]
                ]
            ]
        );
    }
}
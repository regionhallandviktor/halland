<?php

namespace App\Theme;

class NavigationTree
{
    // public $args = array();

    // protected $postStatuses = array('publish');
    // protected $ancestors = null;

    // public $topLevelPages = null;
    // public $secondLevelPages = null;
    public $sortedPages = null;

    public function __construct($args = array(), $parent = false)
    { 
       //if ($parent) {
       //    $parent = get_post($parent);
       //    $this->isAjaxParent = true;
       //}

       //// Get valuable page information
       //if ($parent) {
       //    $parent->post_parent = 0;
       //    $this->currentPage = $parent;
       //} else {
       //    $this->currentPage = $this->getCurrentPage();
       //}

       //// Merge args
       //$this->args = array_merge(array(
       //    'theme_location' => '',
       //    'include_top_level' => false,
       //    'sublevel' => false,
       //    'top_level_type' => 'tree',
       //    'render' => 'active',
       //    'depth' => -1,
       //    'start_depth' => 1,
       //    'classes' => 'nav',
       //    'id' => '',
       //    'sidebar' => false
       //), $args);

       //
       //if ($this->args['depth'] > -1 && $this->args['start_depth'] > 1) {
       //    $this->args['depth'] += $this->args['start_depth'];
       //}

       //if (is_user_logged_in()) {
       //    $this->postStatuses[] = 'private';
       //}

        // $this->getTopLevelPages();
        // $this->getSecondLevelPages();
        $this->sortPages();
        
    }

    /**
     * Gets top level pages
     * @return void
     */
    public function sortPages()
    {   
        $pages = get_pages();
        $sorted = array();

        // Push parents to $sorted
        foreach($pages as $page) {
            if ($page->post_parent === 0) {
                $sorted[$page->ID] = $page;
            }
        }



        $this->sortedPages = $sorted;
        return $this->sortedPages;
    }

    /**
     * Gets top level pages
     * @return void
     */
    //protected function getTopLevelPages()
    //{   
    //    $topLevelQuery = new \WP_Query(array(
    //        'post_parent' => 0,
    //        'post_type' => 'page',
    //        'post_status' => $this->postStatuses,
    //        'orderby' => 'menu_order post_title',
    //        'order' => 'asc',
    //        'posts_per_page' => -1,
    //        'meta_query'    => array(
    //            'relation' => 'AND',
    //            array(
    //                'relation' => 'OR',
    //                array(
    //                    'key' => 'hide_in_menu',
    //                    'compare' => 'NOT EXISTS'
    //                ),
    //                array(
    //                    'key'   => 'hide_in_menu',
    //                    'value' => '0',
    //                    'compare' => '='
    //                )
    //            )
    //        )
    //    ));

    //    $this->topLevelPages = $topLevelQuery->posts;
    //    return $this->topLevelPages;
    //}

    /**
     * Gets second level pages
     * @return array
     */
    // protected function getSecondLevelPages()
    // {
    //     $secondLevel = array();

    //     foreach ($this->topLevelPages as $topLevelPage) {
    //         $pages = get_posts(array(
    //             'post_parent' => $topLevelPage->ID,
    //             'post_type' => 'page',
    //             'orderby' => 'menu_order post_title',
    //             'order' => 'asc',
    //             'posts_per_page' => -1
    //         ));

    //         $secondLevel[$topLevelPage->ID] = $pages;
    //     }

    //     $this->secondLevelPages = $secondLevel;
    //     return $secondLevel;
    // }

    // /**
    //  * Gets the current page object
    //  * @return object
    //  */
    // protected function getCurrentPage()
    // {
    //     if (is_post_type_archive()) {
    //         $pageForPostType = get_option('page_for_' . get_post_type());
    //         return get_post($pageForPostType);
    //     }

    //     global $post;

    //     if (!is_object($post)) {
    //         return get_queried_object();
    //     }

    //     return $post;
    // }
}
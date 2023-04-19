<?php

namespace Emanuel\Walker;

class MainMenuWalker extends \Walker_Nav_Menu
{
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $classes = array_flip( (array) $data_object->classes);
        $hasChildren = !empty($classes['menu-item-has-children']);
        $title = apply_filters( 'the_title', $data_object->title, $data_object->ID );

        $className = $depth < 1 ? 'nav-list-item' : '';
        $output .= '<li class="'.$className.' '.($hasChildren ? 'drop-down' : '').'">';

        if ($hasChildren) {
            $output .= '<span class="nav-list-item-btn">';
        } else {
            $output .= '<a href="'.$data_object->url.'">';
        }
        $output .= $title;

        if ($hasChildren) {
            $output .= '<img src="'.EMANUEL_ASSETS_URL.'img/arrow-header.svg" alt="" />';
            $output .= '</span>';
        } else {
            $output .= '</a>';
        }
    }

    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '<div class="nav-list-item-drop-down"><ul>';
    }

    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= '</ul></div>';
    }


}
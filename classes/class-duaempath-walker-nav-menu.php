<?php

class Duaempath_Walker_Nav_Menu extends Walker_Nav_Menu
{
    /**
     * {@inheritdoc}
     */
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
            $t = '';
            $n = '';
        } else {
            $t = "\t";
            $n = "\n";
        }
        $indent = str_repeat($t, $depth);

        // Default class.
        if (isset($args->submenu_class)) {
            $classes = array($args->submenu_class);
        } else {
            $classes = array('dropdown-menu');
        }

        /**
         * Filters the CSS class(es) applied to a menu list element.
         *
         * @since 4.8.0
         *
         * @param string[] $classes Array of the CSS classes that are applied to the menu `<ul>` element.
         * @param stdClass $args    An object of `wp_nav_menu()` arguments.
         * @param int      $depth   Depth of menu item. Used for padding.
         */
        $class_names = join(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        if (isset($args->submenu_data)) {
            $class_names .= ' ' . $args->submenu_data;
        }

        $output .= "{$n}{$indent}<ul$class_names>{$n}";
    }

    /**
     * {@inheritdoc}
     */
    public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
    {
        if (!$element) {
            return;
        }

        $id_field = $this->db_fields['id'];
        $id       = $element->$id_field;

        // Display this element.
        $this->has_children = !empty($children_elements[$id]);
        if (isset($args[0]) && is_array($args[0])) {
            $args[0]['has_children'] = $this->has_children; // Back-compat.
        }

        // Add dropdown class and toggle
        if ($this->has_children) {
            $element->classes[] = $args[0]->has_children_class;
            $element->url = '#';
        }

        if(in_array('current-menu-item', $element->classes)){
            $element->classes[] = 'active';
        }

        $this->start_el($output, $element, $depth, ...array_values($args));

        if ($this->has_children && !empty($args[0]->submenu_toggle)) {
            $output .= $args[0]->submenu_toggle;
        }

        // Descend only when the depth is right and there are childrens for this element.
        if ((0 == $max_depth || $max_depth > $depth + 1) && isset($children_elements[$id])) {

            foreach ($children_elements[$id] as $child) {

                if (!isset($newlevel)) {
                    $newlevel = true;
                    // Start the child delimiter.
                    $this->start_lvl($output, $depth, ...array_values($args));
                }
                $this->display_element($child, $children_elements, $max_depth, $depth + 1, $args, $output);
            }
            unset($children_elements[$id]);
        }

        if (isset($newlevel) && $newlevel) {
            // End the child delimiter.
            $this->end_lvl($output, $depth, ...array_values($args));
        }

        // End this element.
        $this->end_el($output, $element, $depth, ...array_values($args));
    }
}

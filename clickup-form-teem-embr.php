<?php 

// TEEM EMBR CLICK UP WIDGET

// Create new widget
add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

// Setup widget settings
function my_custom_dashboard_widgets() {
  // format
	global $wp_meta_boxes;
  // add widget to dashboard
	wp_add_dashboard_widget('custom_help_widget', 'Teem Embr | Create New Task', 'custom_dashboard_widget');
}

function custom_dashboard_widget() {
    // ClickUp code pasted inside a variable
    $string .= '<iframe class="clickup-embed clickup-dynamic-height" src="https://forms.clickup.com/f/830by-1603/XKCN4JX3Y512LKZT69" frameborder="0" onmousewheel="" width="100%" height="100%" style="background: transparent; border: 1px solid #ccc;"></iframe><script async src="https://app-cdn.clickup.com/assets/js/forms-embed/v1.js"></script>';

    // Form code printed
    echo $string;
}

?>

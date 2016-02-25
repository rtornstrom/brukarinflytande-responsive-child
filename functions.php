<?php

/* Remove WooCommerce breadcrumbs and results text§ */
add_action( 'init', 'jk_remove_wc_breadcrumbs' );
function jk_remove_wc_breadcrumbs() {
  remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
  remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}

function custom_widgets_init() {

        register_sidebar( array(
                                                  'name'          => __( 'FBI Sidebar 4', 'responsive' ),
                                                  'description'   => __( 'Sidebar - Displays on FBI Custom Blog - User 4 page templates', 'responsive' ),
                                                  'id'            => 'fbi-sidebar-4',
                                                  'before_title'  => '<div class="widget-title"><h3>',
                                                  'after_title'   => '</h3></div>',
                                                  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                                                  'after_widget'  => '</div>'
                                          ) );

	register_sidebar( array(
                                                  'name'          => __( 'FBI Sidebar 5', 'responsive' ),
                                                  'description'   => __( 'Sidebar - Displays on FBI Custom Blog - User 5 page templates', 'responsive' ),
                                                  'id'            => 'fbi-sidebar-5',
                                                  'before_title'  => '<div class="widget-title"><h3>',
                                                  'after_title'   => '</h3></div>',
                                                  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                                                  'after_widget'  => '</div>'
                                          ) );

	register_sidebar( array(
                                                  'name'          => __( 'FBI Sidebar 6', 'responsive' ),
                                                  'description'   => __( 'Sidebar - Displays on FBI Custom Blog - User 6 page templates', 'responsive' ),
                                                  'id'            => 'fbi-sidebar-6',
                                                  'before_title'  => '<div class="widget-title"><h3>',
                                                  'after_title'   => '</h3></div>',
                                                  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                                                  'after_widget'  => '</div>'
                                          ) );

        register_sidebar( array(
                                                  'name'          => __( 'FBI Sidebar 7', 'responsive' ),
                                                  'description'   => __( 'Sidebar - Displays on FBI Custom Blog - User 7 page templates', 'responsive' ),
                                                  'id'            => 'fbi-sidebar-7',
                                                  'before_title'  => '<div class="widget-title"><h3>',
                                                  'after_title'   => '</h3></div>',
                                                  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                                                  'after_widget'  => '</div>'
                                          ) );

        register_sidebar( array(
                                                  'name'          => __( 'FBI Sidebar 8', 'responsive' ),
                                                  'description'   => __( 'Sidebar - Displays on FBI Custom Blog - User 8 page templates', 'responsive' ),
                                                  'id'            => 'fbi-sidebar-8',
                                                  'before_title'  => '<div class="widget-title"><h3>',
                                                  'after_title'   => '</h3></div>',
                                                  'before_widget' => '<div id="%1$s" class="widget-wrapper %2$s">',
                                                  'after_widget'  => '</div>'
                                          ) );
}
add_action( 'widgets_init', 'custom_widgets_init' );

?>

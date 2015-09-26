<?php 

//360Photoviewer
//管理画面で読み込まない
if ( !is_admin() ) {

//add 360photoviewer_librarys
add_action( 'wp_enqueue_scripts', 'biz_vektor_load_scripts_360photoviewer' );
if ( ! function_exists( 'biz_vektor_load_scripts_360photoviewer' ) ) {
	function biz_vektor_load_scripts_360photoviewer() {
		$dir = get_stylesheet_directory_uri();
		
		wp_enqueue_script( 'canvas-touch', $dir. '/js/modernizr-2.7.1-csstransforms3d-canvas-touch.js', array(), null );
		wp_enqueue_script( 'megapix_image', $dir.'/js/megapix-image.js', array(), null );
		wp_enqueue_script( 'three_min', $dir.'/js/three.min.js', array(), null );
		wp_enqueue_script( 'Detector', $dir.'/js/Detector.js', array(), null );
		wp_enqueue_script( 'CSS3DRenderer', $dir.'/js/CSS3DRenderer.js', array(), null );
		//wp_enqueue_script( 'theta-viewer_min', $dir.'/js/theta-viewer.min.js', array(), null );
		wp_enqueue_script( 'theta-viewer', $dir.'/js/theta-viewer.js', array(), null );
		}
	}
}


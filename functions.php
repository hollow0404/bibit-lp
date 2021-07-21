<?php 
function load_js() {
	//管理画面を除外
	if ( !is_admin() ){
		//事前に読み込まれるjQueryを解除
		wp_deregister_script( 'jquery' );
		//Google CDNのjQueryを出力
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', "", "20210721", false );
		wp_enqueue_script('owl', get_theme_file_uri('/assets/js/owl.carousel.js'));
		wp_enqueue_script('review', get_theme_file_uri('/assets/js/review.js'));
		wp_enqueue_script('step', get_theme_file_uri('/assets/js/step.js'));
		wp_enqueue_script('font', get_theme_file_uri('/assets/js/font.js'));
	}
}
add_action( 'init', 'load_js' );
?>
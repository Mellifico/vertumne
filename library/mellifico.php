<?php

// get the slug of post title
if(!function_exists('the_slug')) :
function the_slug() {
	$post_data = get_post($post->ID, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug;
}
endif;

// Post Featured image placeholders
// PLACEHOLD.IT
//  with post title incrustation and random colors
if(!function_exists('placeholdit')) :
	function placeholdit() {

		$colors_bg = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_bg = $colors_bg[mt_rand(0, count($colors_bg) - 1)];

		$colors_txt = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_txt = $colors_txt[mt_rand(0, count($colors_txt) - 1)];

		echo '<img src="http://placehold.it/1024x470/'. $color_bg . '/' . $color_txt . '.jpg&text=' . the_slug() . '" alt="' . the_slug() . '" />';
   
    }

endif;

//same as above but output is src alone for purpose like background image tricks
if(!function_exists('placeholdit_src')) :
	function placeholdit_src() {

		$colors_bg = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_bg = $colors_bg[mt_rand(0, count($colors_bg) - 1)];

		$colors_txt = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_txt = $colors_txt[mt_rand(0, count($colors_txt) - 1)];

		echo 'http://placehold.it/1024x768/'. $color_bg . '/' . $color_txt .'.jpg&text=' . the_slug();
   
    }

endif;

//  with .jpg image extension
if(!function_exists('placeholdit_jpg')) :
	function placeholdit_jpg() {

		$colors_bg = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_bg = $colors_bg[mt_rand(0, count($colors_bg) - 1)];

		$colors_txt = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_txt = $colors_txt[mt_rand(0, count($colors_txt) - 1)];

		$widthes = ['128', '256', '512', '1024' ];
		$width = $widthes[mt_rand(0, count($widthes) - 1)];

		$heights = ['128', '256', '512', '1024' ];
		$height = $heights[mt_rand(0, count($heights) - 1)];

		echo '<img src="http://placehold.it/'.$width.'x'.$height.'/'. $color_bg . '/' . $color_txt . '.jpg" alt="" />';
   
    }

endif;

//  with .jpg image extension
if(!function_exists('placeholdit_jpg_src')) :
	function placeholdit_jpg_src() {

		$colors_bg = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_bg = $colors_bg[mt_rand(0, count($colors_bg) - 1)];

		$colors_txt = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_txt = $colors_txt[mt_rand(0, count($colors_txt) - 1)];

		$widthes = ['128', '256', '512', '1024' ];
		$width = $widthes[mt_rand(0, count($widthes) - 1)];

		$heights = ['128', '256', '512', '1024' ];
		$height = $heights[mt_rand(0, count($heights) - 1)];

		echo 'http://placehold.it/'.$width.'x'.$height.'/'. $color_bg . '/' . $color_txt . '.jpg';
   
    }

endif;

//  with .jpg image extension, same width, differents heights
if(!function_exists('placeholdit_jpg_same_h')) :
	function placeholdit_jpg_same_h() {

		$colors_bg = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_bg = $colors_bg[mt_rand(0, count($colors_bg) - 1)];

		$colors_txt = ['002b36', 'eee8d5', '93a1a1', '586e75','dc322f', '859900', 'd33682','cb4b16', 'b58900', '2aa198', '268bd2'];
		$color_txt = $colors_txt[mt_rand(0, count($colors_txt) - 1)];

		$heights = ['128', '256', '512'];
		$height = $heights[mt_rand(0, count($heights) - 1)];

		echo '<img src="http://placehold.it/320x'.$height.'/'. $color_bg . '/' . $color_txt . '.jpg" alt="" />';
   
    }

endif;

// LOREMPIXEL.COM
// with random subject
if(!function_exists('lorempixel')) :
	function lorempixel() {

		$subjects = ['abstract', 'animals', 'cats', 'business','city', 'food', 'nightlife', 'fashion', 'people','nature', 'sports', 'technics', 'transport'];
		$subject = $subjects[mt_rand(0, count($subjects) - 1)];

		echo '<img src="http://lorempixel.com/1024/470/' . $subject . '/'.  the_slug() .'" alt="'.  the_slug() .'" />';
   
    }

endif;

// same as above but with src output alone for purpose
if(!function_exists('lorempixel_src')) :
	function lorempixel_src() {

		$subjects = ['abstract', 'animals', 'cats', 'business','city', 'food', 'nightlife', 'fashion', 'people','nature', 'sports', 'technics', 'transport'];
		$subject = $subjects[mt_rand(0, count($subjects) - 1)];

		echo 'http://lorempixel.com/1024/768/' . $subject . '/'.  the_slug() ;
   
    }

endif;

// Gallery placeholders thumbnails
if(!function_exists('img_placekeeper')) :
	function img_placekeeper() {

		$sites = ['placekitten.com', 'lorempixel.com' ];
		$site = $sites[mt_rand(0, count($sites) - 1)];

		$widthes = ['128', '256', '512', '1024' ];
		$width = $widthes[mt_rand(0, count($widthes) - 1)];

		$heights = ['128', '256', '512', '1024' ];
		$height = $heights[mt_rand(0, count($heights) - 1)];

		echo '<img src="http://'.$site.'/'.$width.'/'.$height.'/" alt="" />';
   
    }

endif;

?>
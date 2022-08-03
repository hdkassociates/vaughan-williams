<?php

function get_link_url($block_data = '', $acf_field = '') {
  //Hack as link field location changes
    if(array_key_exists('link_url', $block_data)) :
      if(is_array($block_data['link_url'])) :
        $link = $block_data['link_url']['url'];
      else : 
        $link = null;
      endif;
    elseif (array_key_exists($acf_field, $block_data)) : 
      if(is_array($block_data[$acf_field])) :
        $link = $block_data[$acf_field]['url']; 
      else : 
        $link = null;
      endif;
    endif;

return $link; 
}

function get_file_size($id, $decimals = 2){

   $filesize = filesize( get_attached_file( $id ) );
   $filesize = size_format($filesize, $decimals);

   echo strtolower(str_replace([' ', '.0'], '', $filesize));
}

function theme_get_video_id ( $video_url ){


   if ( preg_match('/embed\/([-_\w]+)\?/', $video_url, $matches) ){
       return $matches[1];
   }

   if ( preg_match('/vimeo\.com\/video\/([0-9]+)\?/', $video_url, $matches )){

       return $matches[1];
   }

   if ( preg_match('/vimeo\.com\/([0-9]+)/', $video_url, $matches )){

       return $matches[1];
   }
}


function theme_get_video_provider( $video_url ){


   if ( preg_match('/embed\/([-_\w]+)\?/', $video_url, $matches) ){
       return 'youtube';
   }

   if ( preg_match('/vimeo\.com\/video\/([0-9]+)\?/', $video_url, $matches )){
       return 'vimeo';
   }

   if ( preg_match('/vimeo\.com\/([0-9]+)/', $video_url, $matches )){
       return 'vimeo';
   }
}



function image_orientation($image, $format = null){
    $image = wp_get_attachment_image_src($image['id'], $format);

    $width  = $image[1];
    $height = $image[2];

    // echo '<pre>'; var_dump($width, $height); echo '</pre>'; 

    return ($width > $height) ? 'landscape' : 'portrait';

}

function is_past($post){
    if ($post) {
        
        if ($post->end_date && $post->end_date < date('Ymd')) {
            return true;
        }

        if ($post->end_date_override && $post->end_date_override < date('Ymd')) {
            return true;
        }
        
        return false;
    }
}

function encrypt( $text){
    $encryption_key = getenv('SITE_ENCRYPTION_KEY');
    //$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('rc2'));

    return openssl_encrypt($text, 'rc2', $encryption_key);
}

 function base64( $text ) {
 			
	return str_shuffle(base64_encode($text));
}

function hyphenate( $text ) {
    
    $text = strtolower($text);
    return Inflector::hyphenate($text);
}

function orderbydate($data){
    //usort($data, array($this, 'cmp'));

    $dates = [];
    $dates_str = [];
    foreach ($data as $key => $item) {

        $time = ($item->time) ?: null;
        if ( !empty($time) )
        {
            $time_ = explode(',', $time);
            $time = $time_[0];
        }
        // echo $item->start_date_override, ' - ',  $item->start_date, '<br>';
        if ($item->start_date_override != '' && empty($item->start_date)) {
            // echo $item->start_date_override, '<br>';
            $dates[] = strtotime($item->start_date_override . " {$time}");
            $dates_str[] = $item->start_date_override . " {$time} " . $item;

        } elseif ($item->start_date) {
            $dates[] = strtotime($item->start_date . " {$time}");
            $dates_str[] = $item->start_date . " {$time} " . $item;

        } else {
            $dates[] = strtotime('-1 year');
            $dates_str[] = '-1 year ' . $item;

        }
    }
    // array_multisort($dates, SORT_ASC, $dates_str);
    array_multisort($dates, SORT_ASC, $data);

    // echo '<pre>'; var_dump($dates); echo '</pre>';
    // echo '<pre>'; var_dump($dates_str); echo '</pre>';
    // echo '<pre>'; var_dump($data); echo '</pre>';

    return $data;
}

function words_limit($string, $wordcount) {
   $pieces = explode(" ", $string);
   $first_part = implode(" ", array_splice($pieces, 0, $wordcount));
   return $first_part; 
}

function get_footer_image() {
  if(get_field('footer_image')) :
    $image_id = get_field('footer_image', get_the_ID()); 

  elseif(is_page()): 
    global $post;

    //master fallback 
    $image_id = 55; 
    $post->post_parent;
    //Discover
    if($post->ID == 14 || $post->post_parent == 14 || $post->post_parent == 81) : 
      $image_id = get_field('discover', 'option') ?: 55; 
    //Funding 
    elseif($post->ID == 10 || $post->post_parent == 10): 
      $image_id = get_field('funding', 'option')?: 55; 
    //News 
    elseif($post->ID == 12 || $post->post_parent == 12): 
      $image_id = get_field('news', 'option')?: 55; 
    //The Foundation 
    elseif($post->ID == 6 || $post->post_parent == 6): 
      $image_id = get_field('the_foundation', 'option')?: 55; 
    endif; 

  elseif(is_single()): 
    $image_id = get_field('news', 'option')?: 55; 

  else : 
    $image_id = 55; 
  endif; 

  return $image_id; 
}
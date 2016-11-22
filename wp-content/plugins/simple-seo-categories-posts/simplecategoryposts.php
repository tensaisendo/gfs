<?php
/*
Plugin Name: Simple Category Posts
Plugin URI: http://www.nitroweb.gr/
Description: Creates a list of posts from specified categories (W3C Valid)
Author: Spyros Vlachopoulos
Version: 1.0.4
Author URI: http://www.hostivate.com/
*/
 
 
class simpleCategoryPosts extends WP_Widget {
  function simpleCategoryPosts() {
    $widget_ops = array('classname' => 'simpleCategoryPostsWidget', 'description' => 'Creates a list of posts from a specified category' );
    $this->WP_Widget('simpleCategoryPostsWidget', 'Simple Categories Posts', $widget_ops);
  }
 
  function form($instance) {
    $instance = wp_parse_args( (array) $instance, array( 
      'title' => '', 
      'cid' => '', 
      'numposts' => '', 
      'offposts' => 0, 
      'disptitle' => '', 
      'titletag' => 'div', 
      'displthumb' => '', 
      'thumbwidth' => '100', 
      'thumbheight' => '100', 
      'thumbcrop' => '1', 
      'displexc' => '', 
      'exclength' => '', 
      'rmtext' => '', 
      'dispdate' => '', 
      'dispauthor' => '', 
      'beforeauthor' => 'by ', 
      'orderby' => '', 
      'orderascdesc' => '', 
      'titleorder' => '2', 
      'thumborder' => '1', 
      'excorder' => '4', 
      'rmorder' => '5', 
      'dateorder' => '3', 
      'authororder' => '6')
      );
    
    
    $title        = esc_attr($instance['title']);
    $cid          = esc_attr($instance['cid']);
    $numposts     = esc_attr($instance['numposts']);
    $offposts     = esc_attr($instance['offposts']);
    $disptitle    = esc_attr($instance['disptitle']);
    $titletag     = esc_attr($instance['titletag']);
    $displthumb   = esc_attr($instance['displthumb']);
    $thumbwidth   = esc_attr($instance['thumbwidth']);
    $thumbheight  = esc_attr($instance['thumbheight']);
    $thumbcrop    = esc_attr($instance['thumbcrop']);
    $displexc     = esc_attr($instance['displexc']);
    $exclength    = esc_attr($instance['exclength']);
    $rmtext       = esc_attr($instance['rmtext']);
    $dispdate     = esc_attr($instance['dispdate']);
    $dispauthor   = esc_attr($instance['dispauthor']);
    $beforeauthor = esc_attr($instance['beforeauthor']);
    $orderby      = esc_attr($instance['orderby']);
    $orderascdesc = esc_attr($instance['orderascdesc']);
    $titleorder   = esc_attr($instance['titleorder']);
    $thumborder   = esc_attr($instance['thumborder']);
    $excorder     = esc_attr($instance['excorder']);
    $rmorder      = esc_attr($instance['rmorder']);
    $dateorder    = esc_attr($instance['dateorder']);
    $authororder  = esc_attr($instance['authororder']);
    
?>
  <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('cid'); ?>">Categories / Taxonomies IDs (seperated by commas): <input id="<?php echo $this->get_field_id('cid'); ?>" name="<?php echo $this->get_field_name('cid'); ?>" type="text" value="<?php echo attribute_escape($cid); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('numposts'); ?>">Number of posts: <input id="<?php echo $this->get_field_id('numposts'); ?>" name="<?php echo $this->get_field_name('numposts'); ?>" type="text" value="<?php echo attribute_escape($numposts); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('offposts'); ?>">Posts offset: <input id="<?php echo $this->get_field_id('offposts'); ?>" name="<?php echo $this->get_field_name('offposts'); ?>" type="text" value="<?php echo attribute_escape($offposts); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('disptitle'); ?>">Display Title: <input id="<?php echo $this->get_field_id('disptitle'); ?>" name="<?php echo $this->get_field_name('disptitle'); ?>" type="checkbox" value="disptitle" <?php checked( 'disptitle', $disptitle ); ?> /></label></p>
  <p><label for="<?php echo $this->get_field_id('titletag'); ?>">Title Tag: <input id="<?php echo $this->get_field_id('titletag'); ?>" name="<?php echo $this->get_field_name('titletag'); ?>" type="text" value="<?php echo attribute_escape($titletag); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('displthumb'); ?>">Display Thumb: <input id="<?php echo $this->get_field_id('displthumb'); ?>" name="<?php echo $this->get_field_name('displthumb'); ?>" type="checkbox" value="displthumb" <?php checked( 'displthumb', $displthumb ); ?> /></label></p>
  <p><label for="<?php echo $this->get_field_id('thumbwidth'); ?>">Thumb Width: <input id="<?php echo $this->get_field_id('thumbwidth'); ?>" name="<?php echo $this->get_field_name('thumbwidth'); ?>" type="text" value="<?php echo attribute_escape($thumbwidth); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('thumbheight'); ?>">Thumb Height: <input id="<?php echo $this->get_field_id('thumbheight'); ?>" name="<?php echo $this->get_field_name('thumbheight'); ?>" type="text" value="<?php echo attribute_escape($thumbheight); ?>" /></label></p>
  
  <p><label for="<?php echo $this->get_field_id('thumbcrop'); ?>">Thumb Crop: 
        <select id="<?php echo $this->get_field_id('thumbcrop'); ?>" name="<?php echo $this->get_field_name('thumbcrop'); ?>" >
          <option value="0" <?php if ($thumbcrop == 0) echo 'selected="selected"'; ?>>0</option>
          <option value="1" <?php if ($thumbcrop == 1) echo ' selected="selected"'; ?>>1</option>
          <option value="2" <?php if ($thumbcrop == 2) echo ' selected="selected"'; ?>>2</option>
          <option value="3" <?php if ($thumbcrop == 3) echo ' selected="selected"'; ?>>3</option>
        </select>
      </label>
  </p>
  
  <p><label for="<?php echo $this->get_field_id('displexc'); ?>">Display Excerpt: <input id="<?php echo $this->get_field_id('displexc'); ?>" name="<?php echo $this->get_field_name('displexc'); ?>" type="checkbox" value="displexc" <?php checked( 'displexc', $displexc ); ?> /></label></p>
  <p><label for="<?php echo $this->get_field_id('exclength'); ?>">Excerpt Lenght: <input id="<?php echo $this->get_field_id('exclength'); ?>" name="<?php echo $this->get_field_name('exclength'); ?>" type="text" value="<?php echo attribute_escape($exclength); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('rmtext'); ?>">Read more text: <input id="<?php echo $this->get_field_id('rmtext'); ?>" name="<?php echo $this->get_field_name('rmtext'); ?>" type="text" value="<?php echo attribute_escape($rmtext); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('dispdate'); ?>">Display Date: <input id="<?php echo $this->get_field_id('dispdate'); ?>" name="<?php echo $this->get_field_name('dispdate'); ?>" type="checkbox" value="dispdate" <?php checked( 'dispdate', $dispdate ); ?> /></label></p>
  <p><label for="<?php echo $this->get_field_id('dispauthor'); ?>">Display Author: <input id="<?php echo $this->get_field_id('dispauthor'); ?>" name="<?php echo $this->get_field_name('dispauthor'); ?>" type="checkbox" value="dispauthor" <?php checked( 'dispauthor', $dispauthor ); ?> /></label></p>
  <p><label for="<?php echo $this->get_field_id('beforeauthor'); ?>">Before Author: <input id="<?php echo $this->get_field_id('beforeauthor'); ?>" name="<?php echo $this->get_field_name('beforeauthor'); ?>" type="text" value="<?php echo attribute_escape($beforeauthor); ?>" /></label></p>
  
  <p><label for="<?php echo $this->get_field_id('orderby'); ?>">Order By: 
        <select id="<?php echo $this->get_field_id('orderby'); ?>" name="<?php echo $this->get_field_name('orderby'); ?>" >
          <option value="post_date" <?php if ($orderby == 'post_date') echo 'selected="selected"'; ?>>Date</option>
          <option value="post_title" <?php if ($orderby == 'post_title') echo ' selected="selected"'; ?>>Title</option>
          <option value="comment_count" <?php if ($orderby == 'comment_count') echo ' selected="selected"'; ?>>Number of Comments</option>
        </select>
      </label>
  </p>
  
  <p><label for="<?php echo $this->get_field_id('orderascdesc'); ?>">Sorting: 
        <select id="<?php echo $this->get_field_id('orderascdesc'); ?>" name="<?php echo $this->get_field_name('orderascdesc'); ?>" >
          <option value="asc" <?php if ($orderascdesc == 'asc') echo 'selected="selected"'; ?>>Ascending</option>
          <option value="desc" <?php if ($orderascdesc == 'desc') echo 'selected="selected"'; ?>>Descending</option>
        </select>
      </label>
  </p>
  
  <p><label for="<?php echo $this->get_field_id('titleorder'); ?>">Title Order: <input id="<?php echo $this->get_field_id('titleorder'); ?>" name="<?php echo $this->get_field_name('titleorder'); ?>" type="text" value="<?php echo attribute_escape($titleorder); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('thumborder'); ?>">Thumb Order: <input id="<?php echo $this->get_field_id('thumborder'); ?>" name="<?php echo $this->get_field_name('thumborder'); ?>" type="text" value="<?php echo attribute_escape($thumborder); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('excorder'); ?>">Excerpt Order: <input id="<?php echo $this->get_field_id('excorder'); ?>" name="<?php echo $this->get_field_name('excorder'); ?>" type="text" value="<?php echo attribute_escape($excorder); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('rmorder'); ?>">Read More Order: <input id="<?php echo $this->get_field_id('rmorder'); ?>" name="<?php echo $this->get_field_name('rmorder'); ?>" type="text" value="<?php echo attribute_escape($rmorder); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('dateorder'); ?>">Date Order: <input id="<?php echo $this->get_field_id('dateorder'); ?>" name="<?php echo $this->get_field_name('dateorder'); ?>" type="text" value="<?php echo attribute_escape($dateorder); ?>" /></label></p>
  <p><label for="<?php echo $this->get_field_id('authororder'); ?>">Author Order: <input id="<?php echo $this->get_field_id('authororder'); ?>" name="<?php echo $this->get_field_name('authororder'); ?>" type="text" value="<?php echo attribute_escape($authororder); ?>" /></label></p>
<?php
  }
 
  function update($new_instance, $old_instance) {
  
    $instance = $old_instance;  
    $instance['title'] = $new_instance['title'];
    $instance['cid'] = $new_instance['cid'];
    $instance['numposts'] = $new_instance['numposts'];
    $instance['offposts'] = $new_instance['offposts'];
    $instance['disptitle'] = $new_instance['disptitle'];
    $instance['titletag'] = $new_instance['titletag'];
    $instance['displthumb'] = $new_instance['displthumb'];
    $instance['thumbwidth'] = $new_instance['thumbwidth'];
    $instance['thumbheight'] = $new_instance['thumbheight'];
    $instance['thumbcrop'] = $new_instance['thumbcrop'];
    $instance['displexc'] = $new_instance['displexc'];
    $instance['exclength'] = $new_instance['exclength'];
    $instance['rmtext'] = $new_instance['rmtext'];
    $instance['dispdate'] = $new_instance['dispdate'];
    $instance['dispauthor'] = $new_instance['dispauthor'];
    $instance['beforeauthor'] = $new_instance['beforeauthor'];
    $instance['orderby'] = $new_instance['orderby'];
    $instance['orderascdesc'] = $new_instance['orderascdesc'];
    $instance['titleorder'] = $new_instance['titleorder'];
    $instance['thumborder'] = $new_instance['thumborder'];
    $instance['excorder'] = $new_instance['excorder'];
    $instance['rmorder'] = $new_instance['rmorder'];
    $instance['dateorder'] = $new_instance['dateorder'];
    $instance['authororder'] = $new_instance['authororder'];

    return $instance;
  }
 
  function widget($args, $instance) {
  
    extract($args, EXTR_SKIP);

    $title = empty($instance['title']) ? ' ' : apply_filters('widget_title', $instance['title']);
    $cid = empty($instance['cid']) ? ' ' : $instance['cid'];
    $numposts = empty($instance['numposts']) ? ' ' : $instance['numposts'];
    $offposts = empty($instance['offposts']) ? 0 : $instance['offposts'];
    $disptitle = empty($instance['disptitle']) ? ' ' : $instance['disptitle'];
    $titletag = empty($instance['titletag']) ? 'div' : $instance['titletag'];
    $displthumb = empty($instance['displthumb']) ? ' ' : $instance['displthumb'];
    $thumbwidth = empty($instance['thumbwidth']) ? ' ' : $instance['thumbwidth'];
    $thumbheight = empty($instance['thumbheight']) ? ' ' : $instance['thumbheight'];
    $thumbcrop = empty($instance['thumbcrop']) ? ' ' : $instance['thumbcrop'];
    $displexc = empty($instance['displexc']) ? ' ' : $instance['displexc'];
    $exclength = empty($instance['exclength']) ? ' ' : $instance['exclength'];
    $rmtext = empty($instance['rmtext']) ? ' ' : $instance['rmtext'];
    $dispdate = empty($instance['dispdate']) ? ' ' : $instance['dispdate'];
    $dispauthor = empty($instance['dispauthor']) ? ' ' : $instance['dispauthor'];
    $beforeauthor = empty($instance['beforeauthor']) ? ' ' : $instance['beforeauthor'];
    $orderby = empty($instance['orderby']) ? ' ' : $instance['orderby'];
    $orderascdesc = empty($instance['orderascdesc']) ? ' ' : $instance['orderascdesc'];
    $titleorder = empty($instance['titleorder']) ? ' ' : $instance['titleorder'];
    $thumborder = empty($instance['thumborder']) ? ' ' : $instance['thumborder'];
    $excorder = empty($instance['excorder']) ? ' ' : $instance['excorder'];
    $rmorder = empty($instance['rmorder']) ? ' ' : $instance['rmorder'];
    $dateorder = empty($instance['dateorder']) ? ' ' : $instance['dateorder'];
    $authororder = empty($instance['authororder']) ? ' ' : $instance['authororder'];    
        
    global $wpdb;
    global $post;
    $scpquery = "
    SELECT DISTINCT wposts.* 
    FROM $wpdb->posts wposts
      LEFT JOIN $wpdb->postmeta wpostmeta ON wposts.ID = wpostmeta.post_id 
      LEFT JOIN $wpdb->term_relationships ON (wposts.ID = $wpdb->term_relationships.object_id)
      LEFT JOIN $wpdb->term_taxonomy ON ($wpdb->term_relationships.term_taxonomy_id = $wpdb->term_taxonomy.term_taxonomy_id)
    WHERE wpostmeta.meta_value <= NOW()
      AND wposts.post_status = 'publish' 
      AND $wpdb->term_taxonomy.term_id IN(". $cid .")
    ORDER BY wposts.". $orderby ." ". strtoupper($orderascdesc) ."
    LIMIT ". $offposts .",".$numposts." 
    ";
    // AND $wpdb->term_taxonomy.taxonomy = 'category'
    // AND wposts.post_type = 'post'
    
    $scposts = $wpdb->get_results($scpquery, OBJECT);
    
    echo $before_widget;
    
    if (!empty($title) && trim($title) !='') {
      echo $before_title . $title . $after_title;
    }
    $scpa = 0;
    foreach( $scposts as $post ) {
      setup_postdata($post);
      if ($scpa == $numposts-1) { $lastcont = ' scplastcont'; } elseif ($scpa == 0) { $lastcont = ' scpfirstcont'; } else { $lastcont = ''; }
      ?>
      <div class="scpcontainer<?php echo $lastcont; ?>">
        <?php 
          $scporder = array();
          $feat_image = '';
          $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
          $pluginurl = site_url('/wp-content/plugins/simple-seo-categories-posts/timthumb.php');
          
          if ($displthumb == 'displthumb' && $feat_image != '') { // get thumb
          $scporder[$thumborder] = '
          <div class="scpthumb">
            <a href="'. get_permalink($post->ID) .'" title="'. get_the_title($post->ID) .'">
            <img src="'. $pluginurl .'?src='. $feat_image .'&amp;w='. $thumbwidth .'&amp;h='. $thumbheight .'&amp;zc='. $thumbcrop .'" width="'. $thumbwidth .'" height="'. $thumbheight .'" title="'. get_the_title($post->ID) .'" alt="'. get_the_title($post->ID) .'" />
            </a>
          </div>
          ';
          }
          if ($disptitle == 'disptitle') { // get title
            $scporder[$titleorder] = '
            <'. ($titletag != '' ? $titletag : 'div') .' class="scptitle">
              <a href="'. get_permalink($post->ID) .'" title="'. get_the_title($post->ID) .'">'. get_the_title($post->ID) .'</a>
            </'. ($titletag != '' ? $titletag : 'div') .'>
            ';
          }
          if ($dispdate == 'dispdate') { // get date
            $scporder[$dateorder] = '<div class="scpdate">'. get_the_date() .'</div>
            ';
          }
          
          if ($dispauthor == 'dispauthor') { // get date
            $scporder[$authororder] = '<div class="scpauthor">'. $beforeauthor .get_the_author_link() .'</div>
            ';
          }
        
          if ($exclength > 0 && $displexc == 'displexc') { // get excerpt
            $scporder[$excorder] = '<div class="scptext">'. wp_trim_words(strip_tags(__(get_the_content())), $exclength, '&hellip;') .'</div>'; 
          }
          if ($exclength == 0 && $displexc == 'displexc') {
            $scporder[$excorder] = '<div class="scptext">'. get_the_excerpt() .'</div>'; 
          }
          if (strlen($rmtext) > 0) {
            $scporder[$rmorder] = '<div class="scpmore"><a href="'. get_permalink($post->ID) .'" title="'. get_the_title($post->ID) .'">'. $rmtext .'</a></div>'; 
          }
          ksort($scporder);
          $scporder = apply_filters('sscp_array_filter', $scporder );
          foreach ($scporder as $scpkey => $scpoutput) {
          
            do_action('sscp_before_post');
            
            $scpoutput = apply_filters('sscp_output_filter', $scpoutput );
            echo $scpoutput;
            
            do_action('sscp_after_post');
          }

        ?>
      </div>
      <?php
      $scpa++;
    }
    wp_reset_postdata();
    wp_reset_query();
    echo $after_widget;
    
  }
 
} // end of class

add_action( 'widgets_init', create_function('', 'return register_widget("simpleCategoryPosts");') );

?>
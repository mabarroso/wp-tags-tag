<?php
/*
Plugin Name: Tags Tag
Plugin URI: http://lab.mabarroso.com/tags-tag-wordpress-plugin
Description: Allow tags cloud into your posts or pages
Version: 1.0
Author: mabarroso
Author URI: http://www.mabarroso.com/
*/

if (!class_exists('TagsTag')):
class TagsTag {
  /**
   * Setup our filters
   *
   * @return void
   */
  public function __construct() {
    add_filter('the_content', array($this, 'append_content'));
  }

  /**
   * Appends "Hello WordPress Unit Tests" to the content of every post
   *
   * @param string $content
   * @return string
   */
  public function append_content($content) {
    $number   = 45;
    $exclude  = null;
    $include  = null;

		if (preg_match_all('#\[tags *([^\]]*)\]#im', $content, $tag_matches) ) {
			$i=0;
			foreach ($tag_matches[1] as $params) {
				$tag = str_replace(array('[', ']'), array("\\[", "\\]"), $tag_matches[0][$i++]);

				if (preg_match('#number="([^"]+)"#i', $params, $param_matches) ) {
					$number = $param_matches[1];
				}
				if (preg_match('#exclude="([^"]+)"#i', $params, $param_matches) ) {
					$exclude = $param_matches[1];
				}
				if (preg_match('#include="([^"]+)"#i', $params, $param_matches) ) {
					$include = $param_matches[1];
				}

        $args = array(
          'smallest'                  => 8,
          'largest'                   => 22,
          'unit'                      => 'pt',
          'number'                    => $number,
          'format'                    => 'flat',
          'separator'                 => "\n",
          'orderby'                   => 'name',
          'order'                     => 'ASC',
          'exclude'                   => $exclude,
          'include'                   => $include,
         #'topic_count_text_callback' => default_topic_count_text,
          'link'                      => 'view',
          'taxonomy'                  => 'post_tag',
          'echo'                      => true,
          'child_of'                  => null
        );

				ob_start();
				  wp_tag_cloud($args);
				  $tagContent = ob_get_contents();
        ob_end_clean();

				$content = preg_replace('#'.$tag.'#m', $tagContent, $content);
			}
		}
    return $content;
  }
}

$GLOBALS['TagsTag'] = new TagsTag();

endif;
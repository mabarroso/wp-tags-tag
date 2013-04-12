<?php
/*
Plugin Name: Tags Tag
Plugin URI: http://lab.mabarroso.com/tags-tag-wordpress-plugin
Description: Allow list tags into your posts or pages
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

    return $content;
  }
}

$GLOBALS['TagsTag'] = new TagsTag();

endif;
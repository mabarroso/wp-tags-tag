<?php
include_once __DIR__."/../../src/tagstag.php";

class TagsTagTest extends WP_UnitTestCase {
  public $plugin_slug = 'tags_tag';

  public function setUp() {
    parent::setUp();
    $this->categoriesTag = $GLOBALS['TagsTag'];
  }
}

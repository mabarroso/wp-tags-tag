<?php
include_once __DIR__."/../../src/tagstag.php";

class TagsTagTest extends WP_UnitTestCase {
  public $plugin_slug = 'tags_tag';

  public function setUp() {
    parent::setUp();
    global $wpdb;
    $taxonomyFixtures = file_get_contents(__DIR__.'/../fixtures/taxonomy.sql');
    $sql = explode("\n", preg_replace('#/\*PREFIX\*/wp_#', $wpdb->prefix, $taxonomyFixtures));
    foreach ($sql as $sqlLine) {
      $sqlLine && $wpdb->query($sqlLine);
    }

    $this->categoriesTag = $GLOBALS['TagsTag'];
  }
}

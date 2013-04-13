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

    $this->tagsTag = $GLOBALS['TagsTag'];
  }

  public function testDefault() {
    $response = $this->tagsTag->append_content('[tags]');
    $this->assertContains('tag 1</a>',  $response);
    $this->assertContains('tag 1.1',    $response);
    $this->assertContains('tag 1.2',    $response);
    $this->assertNotContains('tag 1.3', $response);
    $this->assertContains('tag 2</a>',  $response);
    $this->assertContains('tag 2.1',    $response);
    $this->assertContains('tag 2.2',    $response);
    $this->assertNotContains('tag 2.3', $response);
    $this->assertNotContains('tag 3<',  $response);
    $this->assertContains('tag 3.1',    $response);
    $this->assertContains('tag 3.2',    $response);
    $this->assertNotContains('tag 3.3', $response);
  }

  public function testInclude() {
    $response = $this->tagsTag->append_content('[tags include="11, 21"]');
    $this->assertContains('tag 1.1',    $response);
    $this->assertContains('tag 2.1',    $response);
    $this->assertNotContains('tag 1.2', $response);
    $this->assertNotContains('tag 2.2', $response);
  }

  public function testExclude() {
    $response = $this->tagsTag->append_content('[tags exclude="22"]');
    $this->assertContains('tag 2.1',    $response);
    $this->assertNotContains('tag 2.2', $response);
  }
}

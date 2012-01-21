<?php

require_once __DIR__.'/../../src/Post.php';

/**
 * @group functional
 * @group post
*/
class HomepageTest extends PHPUnit_Extensions_SeleniumTestCase
{

  protected function setUp()
  {
    $this->setBrowser('*firefox');
    $this->setBrowserUrl('http://localhost/');
  }

  public function testHomepageContainsLatestFivePost()
  {
    $this->open("/index.php");
    
   	$this->waitForTextPresent('Post');
   	$this->assertTitle('CIBlog');
    $this->assertEquals("Primo Post", $this->getText("//div[@id='main']/div[1]/h2"));
    $this->assertEquals("Primo Post", $this->getText("//div[@id='main']/div[2]/h2"));
    $this->assertEquals("Primo Post", $this->getText("//div[@id='main']/div[3]/h2"));
    $this->assertEquals("Primo Post", $this->getText("//div[@id='main']/div[4]/h2"));
    $this->assertEquals("Primo Post", $this->getText("//div[@id='main']/div[5]/h2"));
     
  }

}
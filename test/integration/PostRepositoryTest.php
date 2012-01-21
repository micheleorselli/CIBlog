<?php

require_once __DIR__.'/../../src/PostRepository.php';

/**
 * @group integration
 * @group post
*/
class PostRepositoryTest extends PHPUnit_Extensions_Database_TestCase
{
    public function getConnection()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=testdb', 'username', 'password');
        return $this->createDefaultDBConnection($pdo);
    }

    
    public function getDataSet()
    {
        return $this->createFlatXMLDataSet(dirname(__FILE__).'/fixtures/post.xml');
    }

    public function testRetrieveEventi()
  	{
	    $post = new PostRepository($this->pdo)->
	    			findLastPost();
	   
	    $this->assertEquals('Primo post', $post->getTitle());
}



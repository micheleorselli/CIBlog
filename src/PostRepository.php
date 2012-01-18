<?php
require_once 'Post.php';

class PostRepository
{

  public function save(Post $post)
  { 
    $q = sprintf("INSERT INTO evento (titolo, descrizione, data_pubblicazione) VALUES ('%s', '%s', '%s')", 
                $this->getTitolo(),
                $this->getDescrizione(),
                $this->getDataPubblicazione());
                
    $res = $conn->exec($q);
  }

  public function findRecentPost($limit = 5)
  {
  	
  }
  
  public function fromArray(array $data)
  {
    $post = new Post();
    $post->title              = $data['title'];
    $post->intro              = $data['intro'];
    $post->body               = $data['body'];
    $post->image              = $data['image'];
    $post->published_at       = $data['published_at'];

    return $post;

  }

 
}

?>

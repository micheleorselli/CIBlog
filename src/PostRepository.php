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

  
  

 
}

?>

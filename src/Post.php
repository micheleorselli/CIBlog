<?php

class Post
{
  private $titolo;
  private $descrizione;
  private $data_pubblicazione

  public function fromArray(array $data)
  {
    $this->titolo             = $data['titolo'];
    $this->descrizione        = $data['descrizione'];
    $this->data_pubblicazione = $data['data_pubblicazione'];
  }

  public function getTitolo()
  {
    return $this->titolo;
  }

  public function getDescrizione()
  {
    return $this->descrizione;
  }

  public function getDataPubblicazione()
  {
    return $this->data_pubblicazione;
  }
}
?>

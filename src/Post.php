<?php

require_once 'ConnectionManager.php';

class Post
{
  private $titolo;
  private $descrizione;
  private $data_pubblicazione
  private $data_fine;

  public function fromArray(array $data)
  {
    $this->titolo             = $data['titolo'];
    $this->descrizione        = $data['descrizione'];
    $this->data_pubblicazione = $data['data_inizio'];
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

  public function save(PDO $conn)
  {
    $res = $conn->exec("INSERT INTO evento (titolo, descrizione, data_inizio, data_fine) VALUES ('".$this->titolo."', '".$this->descrizione."', '".$this->data_inizio."', '".$this->data_fine."')");
  }
}
?>

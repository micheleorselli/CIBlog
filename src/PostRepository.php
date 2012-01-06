<?php
require_once 'Evento.php';
require_once dirname(__FILE__).'/../config/ConfigManager.php';
require_once dirname(__FILE__).'/vendor/Swift-4.0.6/lib/swift_required.php';

class EventoService
{

  public function save(Post $post)
  { 
    $q = sprintf("INSERT INTO evento (titolo, descrizione, data_pubblicazione) VALUES ('%s', '%s', '%s')", 
                $this->getTitolo(),
                $this->getDescrizione(),
                $this->getDataPubblicazione());
                
    $res = $conn->exec($q);
  }

  
  public function findAllOrderByDate(PDO $conn, $offset = 0, $limit = 3)
  {
    $offset_string = ($offset == 0) ? '' : ' OFFSET '.$offset;
    $eventi = $conn->query('SELECT *
                            FROM evento
                            WHERE data_fine >= CURRENT_DATE AND data_inizio <= CURRENT_DATE
                            ORDER BY data_fine ASC'.$offset_string.' LIMIT '.$limit);
    $results = array();
    foreach ($eventi as $row)
    {
      $result[] = $row;
    }

    return $result;
  }

 
}

?>

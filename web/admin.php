<?php

require_once '../lib/EventoService.php';
require_once '../lib/ConnectionManager.php';

if (!isset($_POST['crea_evento']))
{
  header('Location: http://localhost/phpday2010/web/nuovoevento.php');
}

$evento_s = new EventoService();
$evento_s->creaNuovoEvento($_POST, ConnectionManager::getConnection());
header('Location: http://localhost/phpday2010/web/nuovoevento.php?message='. urlencode("Evento creato con successo!"));

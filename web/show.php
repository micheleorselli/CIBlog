<html>
  <head>
    <script src="./js/jquery-1.4.2.min.js" type="text/javascript"></script>
    <script src="./js/jquery-ui-1.8.1.custom.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="./css/ui-lightness/jquery-ui-1.8.1.custom.css" type="text/css" />
    <link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection"><![endif]-->
    
  </head>
  <body>

    <script type="text/javascript">
	$(function() {
            $("#datepicker_1").datepicker({
                showOn: 'button',
                buttonImage: 'css/ui-lightness/images/calendar.gif',
                buttonImageOnly: true,
                dateFormat: 'yy-mm-dd'
            });
	});

        $(function() {
            $("#datepicker_2").datepicker({
                showOn: 'button',
                buttonImage: 'css/ui-lightness/images/calendar.gif',
                buttonImageOnly: true,
                dateFormat: 'yy-mm-dd'
            });
	});
    </script>
      <div class="container showgrid">
    <h2>Inserisci un nuovo evento</h2>

    <?php if (isset($_GET['message'])): ?>
      <div class="notice"><?php echo urldecode($_GET['message']) ?></div>
    <?php endif; ?>

    <form action="http://localhost/phpday2010/web/creaevento.php" method="POST">
      <p>
          <label for="titolo">Titolo: </label><br/>
          <input name="titolo" type="text" />
      </p>
      <p>
          <label for="titolo">Descrizione: </label><br/>
          <textarea name="descrizione" rows="10" cols="50"></textarea>
      </p>
      <p>
          <label for="titolo">Data inizio: </label><br/>
          <input id="datepicker_1" type="text" name="data_inizio">
      </p>
      <p>
          <label for="titolo">Data fine: </label><br/>
          <input id="datepicker_2" type="text" name="data_fine">
      </p>
      <input type="submit" name="crea_evento" value="Crea nuovo evento" />
    </form>
    </div>
  </body>
</html>
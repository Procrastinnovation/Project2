<!--27SEP2014 JLim Initial release for Project 2. Bootstrap were used for additional CSS effect-->
<!--xkcd Password Generator-->
<?php  $NumWord  = $AddNum = $AddSym = null; ?>
<!DOCTYPE html>
<html>
  <head>

    <title>John Lim P2 - DWA15 Portfolio</title>
    <meta charset="utf-8">
	<span><?php=$ErrorMessage ?> </span>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="description" content="">
            <meta name="author" content="">

              <title>Theme Template for Bootstrap</title>

              <!-- Bootstrap core CSS -->
              <link href="dist/css/bootstrap.min.css" rel="stylesheet">
                <!-- Bootstrap theme -->
                <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">


                  <!-- Bootstrap core CSS -->
                  <link href="dist/css/bootstrap.min.css" rel="stylesheet">
                    <!-- Bootstrap theme -->
                    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

                      <!-- Custom styles for this template by JLim -->
                      <link href="theme.css" rel="stylesheet">
                        <?php require 'logic.php'; ?>
</head>
  <body>

    <div class="container">
      <h1>xkcd Password Generator</h1>

      <p class='password'>
        <?=$text1?>
      </p>

      <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p class='container3'>

          <label for='number_of_words'># of Words</label>
          <input maxlength='1' type='text' name='number_of_words' id='number_of_words' value="<?=$NumWord?>">
            (Max 9)
            <br>
         
              <input type='checkbox' name='add_number' id='add_number' <?php echo $AddNum?>>
                <label for='add_number'>Add a number</label>
                <br>
                  <input type='checkbox' name='add_symbol' id='add_symbol' <?php echo $AddSym?> >
                    <label for='add_symbol'>Add a symbol</label>

                    <br>
        <input type='submit' class='btn btn-lg btn-primary' value='Gimme Another'>
					</p>
		</form>
 
      <img src='images/xkcd.png' alt="XKCD"  usemap="#Image-Maps-2014-10-03-100804">
        <map name="Image-Maps-2014-10-03-100804">
          <area shape="Rect" Coords="0,0,850,600" Href="http://xkcd.com/936/">
      </map>

        <div class="container3">

          <!-- FOOTER -->
      <footer>
        <p>-Credits-</p>
        <p>
          Project 1 &middot; <a href='http://p1.ProjectJohnLim.com/')">>Project 1</a> Extra Challenge &middot; <a href='http://getbootstrap.com/'  target="_blank")">>BootStrap</a>
        </p>
        <p class="pull-right">
          <a href="#">Back to top</a>
        </p>
        <p>&copy; 2014 Fall DWA15 - John Lim</p>
      </footer>

    </div>
    <!-- /class="container2"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

  </body>
</html>
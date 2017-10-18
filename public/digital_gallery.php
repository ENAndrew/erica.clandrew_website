<!DOCTYPE html>

<html>
  <head>
    <title>Erica Andrew: Art & Design</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
      <link href="css/lightbox.css" rel="stylesheet">
      <link rel="stylesheet" href="css/styles.css">
      <link href="//fonts.googleapis.com/css?family=IM+Fell+Double+Pica" rel="stylesheet">
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
      <link rel="icon" type="image/png" href="img/layout/icon.png" >
	</head>
    
	<body>

<?php

	require '../resources/components/header.php';

	echo '<div class="container-fluid digi-wrap">';

	require '../resources/components/dig_gallery/gallery_item.php';

    echo '</div>';

	require '../resources/components/footer.php';

	?>
        
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"> </script>
    <script src="/js/lightbox.js" type="text/javascript"></script>
    </body>
</html>
 <?php  
 session_start()
 ?>
 <!DOCTYPE html>
  <html>
    <head>
    	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="asset/css/materialize.min.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="asset/css/stylesheet.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
          <title>FGN_STUDIO</title>
    <body>

<h1>              normalement un dashboard mais bon voilà voilà</h1>
  

       <div class="container">
          <?= $content ?>
        </div>  

    	    
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="asset/js/materialize.min.js"></script>
     <script>$(".button-collapse").sideNav();</script>
    </body>
  </html>
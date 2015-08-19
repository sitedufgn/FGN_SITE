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
    <a href="#!"><img src="asset/picture/Banner.png" class="responsive-image"></a>
    <nav class="nav"><a href="#!" class="brand-logo nav-FGN"><strong>FGN_STUDIO</strong></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="?=home">Accueil</a></li>
        <li><a href="?=video">Vidéos</a></li>
        <li><a href="?=news">News</a></li>
        <li><a href="?=contact">Nous contacter</a></li>
      </ul></nav>

       <div class="container">
          <?= $content ?>
        </div>  

    	    <footer class="page-footer footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">FGN_STUDIO</h5>
                <p class="grey-text text-lighten-4">Le site officiel du FGN_STUDIO</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Lien</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://twitter.com/FGN_STUDIO">Twitter</a></li>
                  <li><a class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UCPu4nUy9cRmji4G-O5M0l8g">Youtube</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Connection</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2015 Copyright FGN_STUDIO by Krokilex and moiDarvoisien because the cake is the lie
            </div>
          </div>
        </footer>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="asset/js/materialize.min.js"></script>
    </body>
  </html>
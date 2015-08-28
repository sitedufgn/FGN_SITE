
<?php  
  
  require_once 'vendor/google/apiclient/src/Google/Client.php';
  require_once 'vendor/google/apiclient/src/Google/Service/YouTube.php';
  
  $OAUTH2_CLIENT_ID = "221396606113-v6fkvv17kvb51jkv2t09cdpo13f2el40.apps.googleusercontent.com";
  $OAUTH2_CLIENT_SECRET = "ZoogSJG5xANAPErqQZ73QzB8";

  $client = new Google_Client();
  $client->setClientId($OAUTH2_CLIENT_ID);
  $client->setClientSecret($OAUTH2_CLIENT_SECRET);
  $client->setRedirectUri('http://moidarvoisien.fr/FGN_SITE/test');
  $client->setScopes('https://www.googleapis.com/auth/youtube.upload');

  $youtube = new Google_Service_Youtube($client);

  session_start();
  echo $_GET['code'];
  if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['token'] = $client->getAccessToken();
    header('Location:http://moidarvoisien.fr/FGN_SITE/test');
    die();
  }

  if (isset($_SESSION['token'])) {
    $client->setAccessToken($_SESSION['token']);
  }

  if ($client->getAccessToken()) {
    
    $snippet = new Google_Service_Youtube_VideoSnippet();
    $snippet->setTitle('Test');
    $snippet->setDescription('test');
    $snippet->setTags(['test', 'de', 'tag']);
    $snippet->setCategoryId(8);

    $status = new Google_Service_Youtube_VideoStatus();
    $status->setPrivacyStatus('private');

    $video = new Google_Service_Youtube_Video();
    $video->setSnippet($snippet);
    $video->setStatus($status);

    $client->setDefer(true);
    $request = $youtube->videos->insert('status,snippet', $video);
    $file = dirname('test.mp4');
    $media = new Google_Http_MediaFileUpload($client, $request, 'video/*', file_get_contents($file));
    $video = $client->execute($request);

  }

  else{
    ?>
    <p><a href="<?= $client->createAuthUrl();?>">Autorisation</a></p>
    <?php
  }

 ?>
 

<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <div class="row">
    <form class="col s12" action="test" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input  type="text" class="validate" name="title">
          <label for="first_name">Titre</label>
        </div>
       </div>
      <div class="row">
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea  class="materialize-textarea" name="description"></textarea>
          <label for="textarea1">Description</label>
        </div>
      </div>
      
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons">send</i>
  </button>
    </form>
   
        
  </div>
</body>
</html>
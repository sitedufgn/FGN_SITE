<?php

  if (isset($_POST['submit'])) {

    if (!empty($_POST['FN'])&&!empty($_POST['LN'])&&!empty($_POST['TA'])&&!empty($_POST['EM'])&&!empty($_POST['SU'])) {
      $FN = $_POST['FN'];
      $LN = $_POST['LN'];
      $subject = $_POST['SU'];
      $message = $_POST['TA'];
      $mail = $_POST['EM'];
      $to = 'krokilexjules@gmail.com';
      $headers = 'From:$mail' . "\r\n" .
     'Nom et Prénom:$FN,$LN' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();
      mail($to, $subject, $message,$headers);
    }
    else{
      echo "Veuillez remplir tous les champs";
    }
   } 
  












?>
<h1>CONTACT</h1>
<div class="row">
    <form class="col s12" action="contact" method="POST">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="FN">
          <label for="first_name">Prénom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate"name="LN">
          <label for="last_name">Nom</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
          <input id="subject" type="text" class="validate" name="SU">
          <label for="subject">Sujet</label>
      </div>
      <div class="row">
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" name="TA"></textarea>
          <label for="textarea1">Message</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="EM">
          <label for="email">Email</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
    <i class="material-icons">send</i>
  </button>
    </form>
   
        
  </div>
<br><br>
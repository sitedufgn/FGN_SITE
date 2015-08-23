<?php 
  session_start(); 

if(isset($_POST['connexion'])) { 
    
    if(empty($_POST['pseudo'])) {
        echo "Le champ Pseudo est vide.";
    } else {
      
        if(empty($_POST['mot_de_passe'])) {
        } else {
            $Pseudo = htmlentities($_POST['pseudo'], ENT_QUOTES, "ISO-8859-1"); 

            $MotDePasse = htmlentities($_POST['mot_de_passe'], ENT_QUOTES, "ISO-8859-1");
            $MotDePasse = sha1($MotDePasse);
          
            $mysqli = mysqli_connect("localhost", "root", "", "streamer");

            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                
                $Requete = mysqli_query($mysqli,"SELECT * FROM user WHERE login = '".$Pseudo."' AND pass = '".$MotDePasse."'");
                
                if(mysqli_num_rows($Requete) == 0) {
                    header('Location: home.html');
                    exit;
                } else {
                    
                    $_SESSION['id'] = $user = array('login' => $Pseudo , 'pass' => $MotDePasse);
                    header('Location: Panel.php');
                    exit;
                }
            }
        }
    }
}
?>
<h1>CONNEXION</h1>
<div class="row">
    <form class="col s12" action="?p=contact" method="GET">
      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="FN">
          <label for="first_name">Login</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate"name="LN">
          <label for="last_name">Mot de passe</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons">send</i>
  </button>
    </form>
   
        
  </div>
<br><br>
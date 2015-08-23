<?php 

if(isset($_POST['submit'])) { 
    
    if(empty($_POST['login'])) {
        header('Location: connexion');
        exit;
    } else {
      
        if(empty($_POST['password'])) {
        } else {
            $Pseudo = htmlentities($_POST['login'], ENT_QUOTES, "ISO-8859-1"); 

            $MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            $MotDePasse = sha1($MotDePasse);
          
            $mysqli = mysqli_connect("localhost", "root", "", "fgn_database");

            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                
                $requete = mysqli_query($mysqli,"SELECT * FROM user WHERE login = '".$Pseudo."' AND pass = '".$MotDePasse."'");
                
                if(mysqli_num_rows($Requete) == 0) {
                    header('Location: connexion');
                    echo "nop";
                    exit;
                } else {
                    $exec = mysqli_query($mysqli, "SELECT grade FROM user WHERE login = '".$Pseudo."'");
                    $exec = $grade;
                    $_SESSION['id'] = $user = array('login' => $Pseudo , 'pass' => $MotDePasse , 'grade' => $grade);
                    echo "<h1><strong>SA MARCHE BITCH</strong></h1>";
                    exit;
                }
            }
        }
    }
}
?>
<h1>CONNEXION</h1>
<div class="row">

    <form class="col s12" action="connexion" method="POST">

      <div class="row">
        <div class="input-field col s6">
          <input id="first_name" type="text" class="validate" name="login">
          <label for="first_name">Login</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="password" class="validate"name="password">
          <label for="last_name">Mot de passe</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light" type="submit" name="submit">Submit
    <i class="material-icons">send</i>
  </button>
    </form>
  </div>
<br><br><br><br>

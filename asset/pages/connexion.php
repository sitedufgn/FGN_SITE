<?php 

if(isset($_POST['submit'])) { 
    
    if(empty($_POST['login'])) {
         echo 'nop';
    } else {
      
        if(empty($_POST['password'])) {
        } else {
            $login = htmlentities($_POST['login'], ENT_QUOTES, "ISO-8859-1"); 

            $password = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            $password = sha1($password);
          
            $mysqli = mysqli_connect("localhost", "root", "", "fgn_database");

            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                
                $requete = mysqli_query($mysqli,"SELECT * FROM user WHERE login = '".$login."' AND pass = '".$password."'");
                
                if($requete === 0) {
                    echo 'nope';
                    exit;
                } else {
                    $exec = mysqli_query($mysqli, "SELECT grade FROM user WHERE login = '".$login."'");
                    $grade = $exec;
                    $_SESSION['login'] = $login;
                    $_SESSION['password'] = $password;
                    $_SESSION['grade'] = $grade;
                    header('Location:home');
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

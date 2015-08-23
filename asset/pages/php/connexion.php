<?php 

if(isset($_POST['connexion'])) { 
    
    if(empty($_POST['pseudo'])) {
        header('Location: asset/pages/connexion.php')
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
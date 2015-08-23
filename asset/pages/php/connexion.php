<?php 

if(isset($_POST['submit'])) { 
    
    if(empty($_POST['login'])) {
        header('Location: asset/pages/connexion.php');
        exit;
    } else {
      
        if(empty($_POST['password'])) {
        } else {
            $Pseudo = htmlentities($_POST['login'], ENT_QUOTES, "ISO-8859-1"); 

            $MotDePasse = htmlentities($_POST['password'], ENT_QUOTES, "ISO-8859-1");
            $MotDePasse = sha1($MotDePasse);
          
            $mysqli = mysqli_connect("localhost", "root", "", "fgn-database");

            if(!$mysqli){
                echo "Erreur de connexion à la base de données.";
            } else {
                
                $requete = mysqli_query($mysqli,"SELECT * FROM user WHERE login = '".$Pseudo."' AND pass = '".$MotDePasse."'");
                
                if(mysqli_num_rows($Requete) == 0) {
                    header('Location: asset/pages/connexion.php');
                    exit;
                } else {
                    $exec = mysqli_query($mysqli, "SELECT grade FROM user WHERE login = '".$Pseudo."'");
                    $exec = $grade
                    $_SESSION['id'] = $user = array('login' => $Pseudo , 'pass' => $MotDePasse , 'grade' => $grade);
                    header('Location: asset/pages/TheCakeIsALie.htrollml');
                    exit;
                }
            }
        }
    }
}
?>
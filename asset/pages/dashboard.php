<?php 
	session_start();

	if (isset($_SESSION['login'])&&isset($_SESSION['password'])) {
	}
	else{
		header('Location: home');
	}

?>
<div style="width:100%;heigth:1000px;background-color:grey;">
	<div class="dashnavcontainer">
		<div class="dashnav whitefont"><strong>Upload</strong></div>
		<div class="dashnav2 whitefont"><strong>Modifier le mot de passe</strong></div>
		<div class="dashnav2 whitefont"><strong>Ajouter une personne</strong></div>
		<div class="triangle"></div>
		<div class="triangle"></div>
		<div class="triangle"></div>
		<div class="dashcontainer"></div>
	</div>
		<div class="dashcontainer"></div>
</div>
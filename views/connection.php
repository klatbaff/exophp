

<?php require_once('../partials/header.php'); ?>





<main>
    <h2>Créer un article : </h2>
    <form method="post">
		<label>Nom d'utilisateur
			<input type="text" name="UserName" />
		</label>

		<label> Mot de Passe
			<input type="password" name="Pass" />
		</label>

		<input type="submit" value="Sign in" />
	</form>	
	<?php require_once('../controller/connectionController.php'); ?>


	<?php	if ($_SERVER['REQUEST_METHOD'] === 'POST'){

			if ($_POST['UserName']==='Damien' && $_POST['Pass'] ==='Petula') { ?>

				<?php  LogUser()?>
				<?php redirectToAdmin()?>

    			<?php	echo "Vous êtes connectés";

   					} else { 
     					echo "Le mot de passe ou le nom d'utilisateur est invalide";
            
               			} 
            		 } ; ?>
	

<?php require_once('../partials/sidebar.php'); ?>

<?php require_once('../partials/footer.php'); ?>

</main>
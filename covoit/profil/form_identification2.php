<form role="form" method="post" action="identification.php">
	<div class="form-group">
		 <label for="exampleInputEmail1">Adresse mail u-psud</label>
		 <input type="email" class="form-control" name="mailUtilisateur" id="exampleInputEmail1" value="<?php echo $_COOKIE['usermail']; ?>"/>
	</div>
	<div class="form-group">
		 <label for="exampleInputPassword1">Mot de passe</label>
		 <input type="password" class="form-control" name="mdpUtilisateur" id="exampleInputPassword1" />
	</div>
	<div class="checkbox">
		 <label><input type="checkbox" name="remember" checked/>Se souvenir de moi</label>
	</div> <button type="submit" class="btn btn-default">Connexion</button>
</form>
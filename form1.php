<!DOCTYPE html>
<html>
<head>
	<title>Deviner un nombre</title>
</head>
<body>
	
	<h1>Deviner un nombre</h1>
	<p>Nous avons généré un nombre aléatoire entre 1 et 100, tentez de le deviner en 10 tours maximum. Pour chaque tentative, nous vous dirons si votre estimation est trop ou pas assez élevée.</p>
	<div class="form">
		<label for="nbr">Entrez votre proposition : </label>
		<input type="text" name="nbr" class="nbr"/>
		<input type="submit" id="btnSubmit" class="btnSubmit" value="Valider" />
	</div>
	<div class="rslts">
		<p class="lblEssais" ></p>
		<p class="lblEtat" ></p>
		<p class="lblPosi" ></p>
	</div>
	</br>
	
</body>
</html>
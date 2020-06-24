<!DOCTYPE html>
<head>
    <title> Calculez votre IMC </title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form method="post" action="traitement.php">

<fieldset>
        <label for="nom">Nom*</label>   
        <input type="text" id="nom" name="nom"/>
        <label for="anneeNaissance">Année de naissance sur quatre chiffres* </label>  
        <input type="text" id="anneeNaissance" name="anneeNaissance"/> 
        <p>Je suis* </p>  
        <label class="radio" for="femme">Femme</label>
        <input type="radio" id="femme" value="femme" name="genre"/>    
        <label class="radio" for="homme">Homme</label>
        <input type="radio" id="homme" value="homme" name="genre"/>
        <label for="poids">Votre poids(en kg)*</label>
        <input type="text" id="poids" name="poids"/>
        <label for="taille">Votre taille(en cm)*</label>
        <input type="text" id="taille" name="taille"/>
        <p>*Champs obligatoires</p>
        <input type="submit" value="Calculez votre IMC"/>
</fieldset>
</form>
</body>
</html>

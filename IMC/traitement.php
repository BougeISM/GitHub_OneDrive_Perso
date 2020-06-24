<head>
	<title>
		Traitement
	</title>
</head>
<body>
	<form method="get" action="index.php">
	Coucou <br>
	<?php
	
	function v($nom_var){ 
		$retour = "";
		echo "test ", $nom_var;
		if (isset($_POST[$nom_var])){
			if ($_POST[$nom_var] != "") {
				$retour = htmlspecialchars($_POST[$nom_var]);
				
			} else {
				echo "La variable ", $nom_var,  " n'est pas renseignée <br>";
				
				$retour = "";
			}
		} else {
			echo "La variable \$", $nom_var, " n'est pas définie <br>";
		}
		return ($retour); 
	}
	$taille =v("taille"); 
	$champ_saisi=0;
	if ($taille=="") 
		$champ_saisi = $champ_saisi + 2**0;
	
	$poids  = v('poids'); if ($poids=="") $champ_saisi += 2**1;
	$nom = v('nom');if ($nom=="") $champ_saisi += 2**2;
	$anneeNaissance = v('anneeNaissance'); if ($anneeNaissance=="") $champ_saisi += 2**3;
	$genre = v('genre'); if ($genre=="") $champ_saisi += 2**4;
	echo $champ_saisi;
	
	if ($champ_saisi >0){
		// Nous sommes dans le cas où un champ n'est pas définie
		echo "Problème";
		
	} else {
		
		if ( (floatval($taille)!=0) && ($taille!="")){
			$imc = $poids/($taille/100)**2;
			echo "IMC = ",$imc;
		} else {
			echo "la taille est nulle ou non définie, on ne peut calucler l'IMC";
		}
		echo "<br>";
		switch($imc){
			case $imc>40 : 
				echo "obésité morbide ou massive<br>";
				break;
			case $imc>35 : 
				echo "obésité sévère<br>";
				break;
			case $imc>30 : 
				echo "obésité modérée<br>";
				break;
			case $imc>25 : 
				echo "surpoids<br>";
				break;
			case $imc>18.5 : 
				echo "Corpulence normale<br>";
				break;
			case $imc>16.5 : 
				echo "Maigreur<br>";
				break;
			default :
				echo "Dénutrition ou famine<br>";
			break;
		}
		// l'âge
		// On suppose que l'âge est définie
		$annee_courante = date("Y");
		$age=$annee_courante - $anneeNaissance;
		if($age<=16){
			$texte ="ATTENTION <br> l'ICM n'est vcalable qu'à partir de 16 ans !";
		} else {
			$texte = "OK";
		}
		echo $texte;
	}
	?>
</body>
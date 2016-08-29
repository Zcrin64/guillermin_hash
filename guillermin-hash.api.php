<?php
/* API PHP créée par zCrin le 26/09/2016
!!! Attention : pensez à ajouter le fichier emojii.css joint dans le fichier zip pour l'affichage des emoji.
!!! Attention : Votre page doit être encodé en utf8 et utiliser le charset utf8
<meta charset="utf-8"/>
Pour hashez une chaîne de caractère : guillermin_hash(string $string);
Pour récupérer la chaîne initiale : guillermin_dehash(string $string[,boolean $NewLine]);
$string = la chaîne sur laquelle effectuer la fonction
$newLine = true ou false: retour la ligne <br /> (false) ou \n(true)
Note : aucune donnée ne sera conservée sur nos serveurs 
Plus d'informations sur le wiki github https://github.com/zCrin/guillermin_hash/wiki
function guillermin_hash($chaine){
	$chaine = file_get_contents('http://epsil0n1.tk/guillermin_hash/api.php?hash='.urlencode($chaine));
	$chaine = substr(substr($chaine,0,-1), 3);
	return $chaine;
}
function guillermin_dehash($chaine, $nl = false){
	$chaine = file_get_contents('http://epsil0n1.tk/guillermin_hash/api.php?dehash='.urlencode($chaine));
	$chaine = substr(substr($chaine,0,-1), 3);
	if($nl == true){
		$chaine = str_replace('<br />',"\n",$chaine);
	}
return $chaine;
}

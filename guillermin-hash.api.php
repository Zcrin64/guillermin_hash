<?php
/* API PHP créée par zCrin le 26/09/2016
!!! Attention : pensez à ajouter le fichier emojii.css joint dans le fichier zip pour l'affichage des emoticons. Vous pouvez aussi directement le charger depuis nos serveurs :
<link rel="stylesheet" type="text/css" media="all" href="http://epsil0n1.tk/guillermin_hash/download/emoji.css"/>
!!! Attention : Votre page doit être encodé en utf8 et utiliser le charset utf8
<meta charset="utf-8"/>
Pour hashez une chaîne de caractère : guillermin_hash(string $string);
Pour récupérer la chaîne initiale : guillermin_dehash(string $string[,boolean $NewLine]);
$string = la chaîne sur laquelle effectuer la fonction
$newLine = true ou false: retour la ligne <br /> (false) ou \n(true)
Note : aucune donnée ne sera conservée sur nos serveurs 
!!! Attention : la version JavaScript de guillermin_hash() est instable. Préférez la version PHP ou vérifiez le résultat de la fonction.
Télécharger la version JS de la fonction : http://epsil0n1.tk/download/guillermin_hash.zip*/
function guillermin_hash($chaine){
	$chaine = file_get_contents('http://epsil0n1.tk/guillermin_hash/api.php?hash='.urlencode($chaine));
	$chaine = preg_replace('#(  _)(.*)_(.*)#siU','$2',$chaine);
	return $chaine;
}
function guillermin_dehash($chaine, $nl = false){
	$chaine = file_get_contents('http://epsil0n1.tk/guillermin_hash/api.php?dehash='.urlencode($chaine));
	$chaine = preg_replace('#(  _)(.*)_(.*)#U','$2',$chaine);
	if($nl == true){
		$chaine = str_replace('<br />',"\n",$chaine);
	}
return $chaine;
}

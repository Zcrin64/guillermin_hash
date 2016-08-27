 /* API Js créée par zCrin le 26/09/2016 
!!! Attention : pensez à ajouter jQuery.
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
!!! Attention : pensez à ajouter le fichier emojii.css joint dans le fichier zip pour l'affichage des emoticons. Vous pouvez aussi directement le charger depuis nos serveurs :
<link rel="stylesheet" type="text/css" media="all" href="http://epsil0n1.tk/guillermin_hash/download/emoji.css"/> 
Pour hashez une chaîne de caractère : guillermin_hash(string $string,function sucess);
Pour récupérer la chaîne initiale : guillermin_dehash(string $string,boolean $NewLine,function success);
$string = la chaîne sur laquelle effectuer la fonction
$newLine = true ou false: retour la ligne <br /> (false) ou \n(true)
success = fonction contenant comme paramètres le résultat
Note : aucune donnée ne sera conservée sur nos serveurs 
!!! Attention : la version JavaScript de guillermin_hash() est instable. Préférez la version PHP ou vérifiez le résultat de la fonction.
Télécharger la version PHP de la fonction : http://epsil0n1.tk/download/guillermin_hash.zip*/
function guillermin_hash($chaine, callback){
	$.post( "http://epsil0n1.tk/guillermin_hash/api.php", { hash : $chaine },function(result){
		/_(.+)_/.exec(result);
		callback.call(this, RegExp.$1);
	},'text');
}
function guillermin_dehash($chaine, $nl, callback){
	$.post( "http://epsil0n1.tk/guillermin_hash/api.php", { dehash : $chaine },function(result){
		/_(.+)_/.exec(result);
		var res = RegExp.$1;
		if($nl == true){
			res = res.replace(/<br \/>/g, '\n');
		}
		callback.call(this, res);
	},'text');
}

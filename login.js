formLogin.addEventListener ("submit", function (evenement){
	// éviter le comportement par défaut (c.à.d. réaliser le action)
	// de l'événement submit
	evenement.preventDefault();
});

btnEnvoyer.addEventListener ('click', function (evenement){
	var xhr = new XMLHttpRequest();
	// créer un objet FormData contenant toutes les données du formulaire 
	// formLogin, qui se trouve dans le DOM
	var formulaire = new FormData (formLogin);

	xhr.onreadystatechange = function (){
		if (xhr.readyState == 4) {
			if (xhr.status==200) {
				console.log ('xhr.responseText', xhr.responseText); // le message du serveur concernant le login
//				if (xhr.responseText == "compteinexistant"){
//                    message.innerHTML = "Compte inexistant";
//                } else 
                
                    if (xhr.responseText == "error") {
                    message.innerHTML = "Couple / Mot de passe incorrects";
                }
                else { 
                    window.location.href = "./index.php";
                }
                
			}
			else {
				console.log ("error dans AJAX! "+ xhr.status);
			}
		}
	}
	
	// on appelle le serveur et on lui envoie le formulaire
	xhr.open ('POST','./loginTraitement.php');
	xhr.send (formulaire);
		
});
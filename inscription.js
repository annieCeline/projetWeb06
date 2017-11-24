formInscription.addEventListener("submit", function (e){
   e.preventDefault(); //annule le comportement par defaut(=charger page) du submit (attention sur le form l'addEvent!)
});

btnEnvoyer.addEventListener ("click", function(e){
    var xhr = new XMLHttpRequest();
    //créer un objet FormData contenant toutes les données du formulaire qui se trouve dans le DOM (ici: form1)
    var formulaire = new FormData(formInscription);
        
    xhr.onreadystatechange = function() {
        //séparer les 2 if parce que sinon prob qd console.log ou ac les else (à cause des differents etats du xhr)
        if (xhr.readyState == 4) {
//            console.log("ok");
            if(xhr.status == 200) {
//                console.log(xhr.responseText);
                if(xhr.responseText == "error") { //le message du serveur concernant l'inscription
                    message.innerHTML = "Oops, il y'a eu un problème. Veuillez rééssayer";
                
                } else {
                window.location.href = "./login.php";
            }
        }
        else {
				console.log ("error dans AJAX! "+ xhr.status);
			}
        }
    }
    
    //on appelle le serveur et on envoie le formulaire
    xhr.open ('POST', './inscriptionTraitement.php');
    xhr.send (formulaire);
});
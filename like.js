like.addEventListener("click", likeFunction );
function likeFunction (e){
   like.addClass = "animated pulse";


var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function (){
    if (xhr.readyState == 4){
        if (xhr.status == 200) {
            var nombreLikes = JSON.parse(xhr.responseText);
            console.log(nombreLikes);
            nbLikes.innerHTML= "Le film comptabilise maintenant " + nombreLikes[0]['nombreLikes'] + " likes";
            messageLike.innerHTML = "Merci !";
        }
        else {
            console.log("pas ok");
        }
    }
}


xhr.open('POST', './like.php');
    
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xhr.send("id_film=" + id_film.value, "id_user=" + id_user.value);
    
like.removeEventListener("click", likeFunction);
};    
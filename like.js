like.addEventListener("click", function(e){
   like.style.border= "1px solid orange";


var xhr = new XMLHttpRequest();

xhr.onreadystatechange = function (){
    if (xhr.readyState == 4){
        if (xhr.status == 200) {
            var nombreLikes = JSON.parse(xhr.responseText);
            console.log(nombreLikes);
            nbLikes.innerHTML= nombreLikes[0]['nombreLikes'];
        }
        else {
            console.log("pas ok");
        }
    }
}


xhr.open('POST', './like.php');
    
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

xhr.send("id_film=" + id_film.value);
    
});    
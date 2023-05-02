var modal = document.getElementById("modalContentExterno");
var span = document.getElementsByClassName("close")[0];
var btn = document.getElementById("new-post");

btn.onclick = function(){
    modal.style.display = "block";
}

span.onclick = function(){
    modal.style.display = "none";
}

window.onclick = function(event){
    if(event.target == modalContentExterno){
        modal.style.display = "none";
    }
}
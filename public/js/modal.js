let modal = document.getElementById("dashboard-functions");
let spans = document.querySelectorAll('[id^="modal-"]');
let btn = document.getElementById("new-post");




spans.forEach(element => {

  let closeButton = element.querySelector('.modal-close');

  closeButton.addEventListener('click', () => {

    modal.style.display = "none";
    closeModals();
  });
});


function dashboardFunctions(button){
    let showModal = document.getElementById("modal-"+button.id);
    console.log(button)
    modal.style.display = "block";
    showModal.style.display = "block";
}

window.onclick = function(event){
    if(event.target == modal){
        modal.style.display = "none";
        closeModals();
    }


}

function closeModals(){
    let modalElements = document.querySelectorAll('[id^="modal-"]');

    modalElements.forEach(element => {
        element.style.display = "none";
      });
}

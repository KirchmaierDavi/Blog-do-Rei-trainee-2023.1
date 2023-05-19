document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("edit-user");
    const cancelar = document.getElementById("cancelar");
    const confirmar = document.getElementById("confirmar");
    const excluir = document.getElementById("EditarUsuario");
  
    excluir.addEventListener("click", function() {
      modal.style.display = "block";
    });
  
    cancelar.addEventListener("click", function() {
      modal.style.display = "none";
    });
  
    confirmar.addEventListener("click", function() {
      modal.style.display = "none";
    });
  }); 
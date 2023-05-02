document.addEventListener("DOMContentLoaded", function() {
    const modal = document.getElementById("modal");
    const cancelar = document.getElementById("cancelar");
    const confirmar = document.getElementById("confirmar");
    const excluir = document.getElementById("excluir");
  
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
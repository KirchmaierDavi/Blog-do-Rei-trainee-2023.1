document.addEventListener("DOMContentLoaded", function() {
  const modal = document.getElementById("edit-user");
  const abrirModal = document.getElementById("abrir-modal");
  const cancelar = document.getElementById("cancelar");
  const confirmar = document.getElementById("confirmar");

  abrirModal.addEventListener("click", function() {
      modal.style.display = "block";
  });

  cancelar.addEventListener("click", function() {
      modal.style.display = "none";
  });

  confirmar.addEventListener("click", function() {
      modal.style.display = "none";
  });
});
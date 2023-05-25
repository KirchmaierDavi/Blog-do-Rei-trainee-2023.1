document.addEventListener("DOMContentLoaded", function() {
  const abrirModalDashboard = document.getElementById("abrir-modal");
  const cancelarDashboard = document.getElementById("cancelar");
  const confirmarDashboard = document.getElementById("confirmar");
  const modalDashboard = document.getElementById("dashboard-functions");
  const modalEditar = document.getElementById("edit-user-modal");

  abrirModalDashboard.addEventListener("click", function() {
    openModal(modalDashboard);
    closeModal(modalEditar);
  });

  const abrirModalEditar = document.getElementById("editar-usuario");
  const cancelarEditar = document.getElementById("cancelar-edicao");
  const confirmarEditar = document.getElementById("confirmar-edicao");

  abrirModalEditar.addEventListener("click", function() {
    openModal(modalEditar);
    closeModal(modalDashboard);
  });

  cancelarDashboard.addEventListener("click", function() {
    closeModal(modalDashboard);
  });

  confirmarDashboard.addEventListener("click", function() {
    closeModal(modalDashboard);
  });

  cancelarEditar.addEventListener("click", function() {
    closeModal(modalEditar);
  });

  confirmarEditar.addEventListener("click", function() {
    closeModal(modalEditar);
  });

  window.onclick = function(event) {
    if (event.target == modalDashboard) {
      closeModal(modalDashboard);
    } else if (event.target == modalEditar) {
      closeModal(modalEditar);
    }
  };
});

function openModal(modal) {
  modal.style.display = "block";
  document.body.style.overflow = "hidden";
}

function closeModal(modal) {
  modal.style.display = "none";
  document.body.style.overflow = "auto";
}

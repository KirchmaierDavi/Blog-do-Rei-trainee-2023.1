const editarBtn = document.querySelector('.btn-warning');

const modalEditUser = document.getElementById('modal-edit-user');

editarBtn.addEventListener('click', function() {
  modalEditUser.style.display = 'block';
});

const modalClose = document.querySelector('.modal-close');

modalClose.addEventListener('click', function() {
  modalEditUser.style.display = 'none';
});


const editarBtn = document.getElementById('editarBtn');


const modalEditUser = document.getElementById('modal-edit-user');


editarBtn.addEventListener('click', function() {
 
  modalEditUser.style.display = 'block';
});


const modalClose = document.querySelector('.modal-close');


modalClose.addEventListener('click', function() {

  modalEditUser.style.display = 'none';
});
const selectField = document.querySelector('#patient');
const submitBtn = document.querySelector('#modal-trigger');
let patientToDelete;
selectField.addEventListener('change',(e) =>{
    patientToDelete = e.target.value;
});
submitBtn.addEventListener('click', (e)=>{
    e.target.value = patientToDelete;
})
var deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
deleteModal.show();

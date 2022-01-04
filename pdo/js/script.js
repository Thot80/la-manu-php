const patients = document.querySelectorAll('.patient-row');

patients.forEach(element => {
    element.addEventListener('click', ()=>{
        let id = element.firstElementChild.textContent;
        window.location.assign("profil-patient.php?id="+id);
    })
});

const appointments = document.querySelectorAll('.appointment-row');

appointments.forEach(element => {
    element.addEventListener('click', ()=>{
        let id = element.firstElementChild.textContent;
        window.location.assign("rendezvous.php?id="+id);
    })
});
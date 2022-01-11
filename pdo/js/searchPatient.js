const searchField = document.querySelector('#filter');
function ajaxRequest(url, filter){
    httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = serverResponse;
    httpRequest.open('POST', url);
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    let dataToSend = 'search=true&filter='+encodeURIComponent(filter);
    console.log(dataToSend);
    httpRequest.send(dataToSend);
}
function serverResponse(){
    if(httpRequest.readyState === XMLHttpRequest.DONE){
        if(httpRequest.status === 200){
            console.log('Une iteration');
        }
    }
}
searchField.addEventListener('input', ()=>{
    let filter = searchField.value;
    ajaxRequest('../controllers/listPatientController.php', filter);
});
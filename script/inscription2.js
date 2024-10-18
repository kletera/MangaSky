const confirmation=document.querySelector('#verifpassword');
const confirmationLab=document.querySelectorAll('#formIn label')[2];

toggleIns(confirmation,confirmationLab);

// Password verification
const divConf=document.querySelectorAll('.messageError')[2];

confirmation.addEventListener('keyup',()=>{
    let errorMsg ='';
    confirmationLab.classList.add('labelUpError');
    confirmationLab.classList.remove('labelUp');
    if(!password.value.match(confirmation.value)){
        errorMsg+='Les Mot de passe ne correspondent pas';
        password.style.border='1px solid red'
    }
    divConf.innerText=errorMsg;
});
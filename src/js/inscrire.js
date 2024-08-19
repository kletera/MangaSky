
const mail=document.querySelector('#email');
const mailLab=document.querySelectorAll('#formIn label')[0];
console.log(mail,mailLab)
const password=document.querySelector('#password');
const passwordLab=document.querySelectorAll('#formIn label')[1];
console.log(password,passwordLab);
const confirmation=document.querySelector('#verifpassword');
const confirmationLab=document.querySelectorAll('#formIn label')[2];
console.log(confirmation,confirmationLab);

//Swich in input 

function toggleIns(a,b){
    a.addEventListener('click',()=>{
        b.classList.add('labelUp');
        if(b.className=='labelDow labelUpError'){
            b.classList.toggle('labelUpError');
        }
        console.log(mailLab.className)
    });
}
toggleIns(mail,mailLab);
toggleIns(password,passwordLab);
toggleIns(confirmation,confirmationLab);
// Sécuriter
const regexObj = {
    regexMail : /^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/,
    charDecimal : /\d/,
    charSpecial : /[$&@!]/,
    xssPattern:/<script.*?>.*?<\/script>|<.*?onclick=.*?>|<.*?on\w+=".*?"/i
};
const divMail=document.querySelectorAll('.messageError')[0];

mail.addEventListener('keyup',()=>{
    let errorMsg = '';
    if(mail.value.length<1){
        mailLab.classList.add('labelUpError');
        mailLab.classList.remove('labelUp');
    }
    if(!mail.value.match(regexObj.regexMail)){
        mail.style.border='1px solid red'
        errorMsg+=`Le format du mail n'est pas correct`;
    }else{
        errorMsg='';
        mailLab.classList.add('labelUp')
        mailLab.classList.remove('labelUpError');
        mail.style.border='none'
    }
    if(mail.value.match(regexObj.xssPattern)){
        // document.location.replace('')
    }
    divMail.innerText=errorMsg;
});

// Password
const divPassword=document.querySelectorAll('.messageError')[1];

password.addEventListener('keyup',()=>{
    let errorMsg ='';
    passwordLab.classList.add('labelUpError');
    passwordLab.classList.remove('labelUp');
    if(password.value.length<6){
        errorMsg+=`<li>Mot de passe trop Faible</li>`;
    }else if(password.value.length>12){
        errorMsg+=`<li>Mot de passe trop Long</li>`;
    }
    if(!password.value.match(regexObj.charDecimal)){
        errorMsg+=`<li>Le Mot de passe doit contenir 1 chiffre</li>`;
    }
    if(!password.value.match(regexObj.charSpecial)){
        errorMsg+='<li>Le Mot de passe doit contenir un caractère spécial</li>';
    }
    if(password.value.match(regexObj.xssPattern)){
        // document.location.replace('')
    }
    divPassword.classList.add('popUp');
    divPassword.innerHTML=`<ul>${errorMsg}</ul>`;
});
// Remove popUp 
document.body.addEventListener('click',()=>{
    divPassword.classList.remove('popUp');
})


// Password verification
const divConf=document.querySelectorAll('.messageError')[2];

confirmation.addEventListener('keyup',()=>{
    let errorMsg ='';
    confirmationLab.classList.add('labelUpError');
    confirmationLab.classList.remove('labelUp');
    if(!password.value.match(confirmation.value)){
        errorMsg+='Les Mot de passe ne correspondent pas';
    }
    if(confirmation.value.match(regexObj.xssPattern)){
        // document.location.replace('')
    }
    divConf.innerText=errorMsg;
});

// Submit
formIn.addEventListener('submit',(e)=>{
    e.preventDefault();
})
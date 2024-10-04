// const main=document.
const mail=document.querySelectorAll('main form input')[0];
const mailLab=document.querySelectorAll('.label_incription label')[0];

const password=document.querySelectorAll('main form input')[1];
const passwordLab=document.querySelectorAll('.label_incription label')[1];

//Swich in input 
function toggleIns(a,b){
    a.addEventListener('click',()=>{
        b.classList.add('labelUp');
        b.classList.toggle('labelUpError');
    });
}
toggleIns(mail,mailLab);
toggleIns(password,passwordLab);

// function togBody(a,b){
//     main.addEventListener('click',()=>{
//         if(a.value.length==0){
//             b.classList.remove('labelUp');
//             b.classList.add('labelDow');
//         }
//     })
// }
// togBody(mail,mailLab);
// togBody(password,passwordLab);

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
const txtEr1=document.querySelectorAll('.txtError')[0];
const txtEr2=document.querySelectorAll('.txtError')[1];
const txtEr3=document.querySelectorAll('.txtError')[2];

password.addEventListener('keyup',()=>{
    passwordLab.classList.add('labelUpError');
    passwordLab.classList.remove('labelUp');
    if(password.value.length<6){
        txtEr1.innerText='Mot de passe trop Faible';
        password.style.border='1px solid red'
    }else if(password.value.length>12){
        txtEr1.innerText='Mot de passe trop Long';
        password.style.border='1px solid red'
    }else{
        txtEr1.innerText='';
    }
    if(!password.value.match(regexObj.charDecimal)){
        txtEr2.innerText=`Le Mot de passe doit contenir 1 chiffre`;
        password.style.border='1px solid red'
    }else{
        txtEr2.innerText='';
    }
    if(!password.value.match(regexObj.charSpecial)){
        txtEr3.innerText='Le Mot de passe doit contenir un caractère spécial';
        password.style.border='1px solid red'
    }else{
        txtEr3.innerText='';
    }
    if(password.value.match(regexObj.xssPattern)){
        // document.location.replace('')
    }
    divPassword.classList.add('popUp');
});
// Remove popUp 
document.body.addEventListener('click',()=>{
    divPassword.classList.remove('popUp');
})

// Submit+Connexion
const form=document.querySelector('main form');

form.addEventListener('submit',(e)=>{
    e.preventDefault();
})
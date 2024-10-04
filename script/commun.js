const btBurger=document.querySelector('#btMenuBurger');
const burger=document.querySelector('#burger');
const x=document.querySelector('.close');

btBurger.addEventListener('click', ()=>{
    burger.classList.toggle('dis_none');
    btBurger.classList.toggle('dis_none');
});

x.addEventListener('click', ()=>{
    burger.classList.toggle('dis_none');
    btBurger.classList.toggle('dis_none');
});
const light=document.querySelector('.themeSwich img').src;
const btLight=document.querySelector('.themeSwich button');
const main=document.querySelector('main');
console.log(light,btLight,main);


btLight.addEventListener('click',()=>{
    light
    main.classList.toggle('dark_mode');
})
const btFiltre=document.querySelector('#bt_filtre');
const filtre=document.querySelector('.filtre');
console.log(filtre,btFiltre);

btFiltre.addEventListener('click',()=>{
    filtre.classList.toggle('dis_none')
})
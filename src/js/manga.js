const synopsis=document.querySelectorAll('.titreSwich a')[0];
const titreChap=document.querySelectorAll('.titreSwich a')[1];

const  descriptionSy=document.querySelectorAll('.description')[0];
const  descriptionChap=document.querySelectorAll('.description')[1];
console.log(synopsis,titreChap,descriptionSy,descriptionChap)

descriptionChap.classList.toggle('dis_none');
descriptionChap.classList.toggle('chapNumb');

synopsis.addEventListener('click',()=>{
    descriptionSy.classList.remove('dis_none');
    descriptionChap.classList.add('dis_none');
});

titreChap.addEventListener('click',()=>{
    titreChap.classList.add('initial');
    titreChap.classList.remove('colorChange');
    synopsis.classList.remove('initial');
    synopsis.classList.add('colorChange');
    descriptionSy.classList.add('dis_none');
    descriptionChap.classList.remove('dis_none');
    chapT

});


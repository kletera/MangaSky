const synopsis=document.querySelectorAll('.titreSwich a')[0];
const titreChap=document.querySelectorAll('.titreSwich a')[1];

const  descriptionSy=document.querySelectorAll('.description')[0];
const  descriptionChap=document.querySelectorAll('.description')[1];
console.log(synopsis,titreChap,descriptionSy,descriptionChap)

descriptionChap.classList.toggle('dis_none');
descriptionChap.classList.toggle('chapNumb');

synopsis.addEventListener('click',()=>{
    titreChap.classList.remove('initial');
    titreChap.classList.add('colorChange');
    synopsis.classList.add('initial');
    synopsis.classList.remove('colorChange');
    descriptionSy.classList.remove('dis_none');
    descriptionChap.classList.add('dis_none');
    descriptionChap.classList.remove('chapNumb');
});

titreChap.addEventListener('click',()=>{
    titreChap.classList.add('initial');
    titreChap.classList.remove('colorChange');
    synopsis.classList.remove('initial');
    synopsis.classList.add('colorChange');
    descriptionSy.classList.add('dis_none');
    descriptionChap.classList.remove('dis_none');
    descriptionChap.classList.add('chapNumb');

});

const MangaApiGenre =  async () => {
    const data = await fetch('https://api.jikan.moe/v4/genres/manga');
    console.log(data);
    const dataTransformed = await  data.json();
    console.log(dataTransformed);
};
MangaApiGenre();
const MangaApi =  async () => {
    const data = await fetch('https://api.jikan.moe/v4/manga');
    console.log(data);
    const dataTransformed = await  data.json();
    console.log(dataTransformed);
};
MangaApi();
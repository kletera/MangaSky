// Api Genre manga
const MangaApiGenre =  async () => {
    const data = await fetch('https://api.jikan.moe/v4/genres/manga');
    const dataTransformed = await  data.json();
    console.log(dataTransformed);
};

// Api manga 
const MangaApi =  async () => {
    const url = await fetch('https://api.jikan.moe/v4/manga');
    const data = await  url.json();
    console.log(data.data);
    for(i=0;i<data.data.length;i++){
        let id=data.data[0];
        let img=data.data[i].images.jpg.image_url;
        let nom=data.data[i].title;
        let chapitre1=data.data[i].chapters;
        let chapitre2=data.data[i].chapters-1;
        let chapitre3=data.data[i].chapters-2;
        addItem(nom,img,chapitre1,chapitre2,chapitre3);
    }
};
MangaApi();

// Api manga random
const RandomApi=async()=>{
    const data=await fetch('https://api.jikan.moe/v4/random/manga');
    const dataTransformed=await data.json;
    console.log(dataTransformed);
}

const list=document.querySelector('.bt_pg_next');

// Ajout des element HTML de l'accueil a partire de l'api Manga Api
function addItem(nom,portait, chapitre1,chapitre2,chapitre3,temp){
    // Creation des element et de leur style + attribut
    const article=document.createElement('article');
        article.classList.add("itemupdate");
    const aImg=document.createElement('a');
        aImg.href="/MangaSky/manga"
    const img=document.createElement('img');
    
    // liste
    const ul=document.createElement('ul');
        ul.classList.add("listAC");
    // titre
    const liTitre=document.createElement('li');
        liTitre.style.padding="0";
        liTitre.style.marginBottom="10px";
    const aTitre=document.createElement('a');
    aTitre.href="/MangaSky/manga"
    const titre=document.createElement('h3');
    // chapitre 1
    const lichapitre1=document.createElement('li');
        lichapitre1.href="/MangaSky/manga";
    const aChapitre1=document.createElement('a');
        aChapitre1.href="/MangaSky/manga"
        const span1=document.createElement('span');
    // chapitre 2
    const lichapitre2=document.createElement('li');
        lichapitre2.href="/MangaSky/manga";
    const aChapitre2=document.createElement('a');
        aChapitre2.href="/MangaSky/manga"
        const span2=document.createElement('span');
    // chapitre 3
    const lichapitre3=document.createElement('li');
        lichapitre3.href="/MangaSky/manga";
    const aChapitre3=document.createElement('a');
        aChapitre3.href="/MangaSky/manga"
        const span3=document.createElement('span');

    // insertion des donner de l'api
    img.src=portait;
    img.alt="Image ",nom;
    img.title="Image ",nom;
    titre.innerText=nom;
    if(chapitre1>0){
        aChapitre1.innerText=`Chapitre ${chapitre1}`;
        span1.innerText="20 min";
    }
    if(chapitre2>0){
        aChapitre2.innerText=`Chapitre ${chapitre2}`;
        span2.innerText="20 min";
    }
    if(chapitre3>0){
        aChapitre3.innerText=`Chapitre ${chapitre3}`;
        span3.innerText="20 min";
    }
    // insertion dans le HTML
        article.append(aImg);
            aImg.append(img);
        article.append(ul);
            ul.append(liTitre);
                liTitre.append(aTitre);
                    aTitre.append(titre);
            ul.append(lichapitre1);
                lichapitre1.append(aChapitre1);
                lichapitre1.append(span1);
            ul.append(lichapitre2);
                lichapitre2.append(aChapitre2);
                lichapitre2.append(span2);
            ul.append(lichapitre3);
                lichapitre3.append(aChapitre3);
                lichapitre3.append(span3);
    list.before(article);
}
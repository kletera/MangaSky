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

const RandomApi=async()=>{
    const data=await fetch('https://api.jikan.moe/v4/random/manga');
    console.log(data);
    const dataTransformed=await data.json;
    console.log(dataTransformed);
}
RandomApi();
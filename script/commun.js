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

const api =async()=>{
    const url = 'https://myanimelist.p.rapidapi.com/manga/1';
const options = {
	method: 'GET',
	headers: {
		'x-rapidapi-key': '6b90e78cd8msh908d09eb1199d36p1a9c7fjsnf7763fa1655b',
		'x-rapidapi-host': 'myanimelist.p.rapidapi.com'
	}
};

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}
}
api();
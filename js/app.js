
console.log("%cVamos bien 👍 🍺", "font-size:2em;color:green;");

const formSearch = document.querySelector('#searchform');
// console.log(formSearch);
formSearch.className += ' form-inline';
const input = document.querySelector('#s');
input.className += ' form-control';
const boton = document.querySelector('#searchsubmit');
boton.className += ' btn btn-outline-secondary';

const listawi = document.querySelector('.alex ul')
listawi.className += ' list-group';

listawi.querySelectorAll('li').forEach(item => {
    item.className += ' list-group-item';
});;



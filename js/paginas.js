const Params = new URLSearchParams(window.location.search);
const id = Params.get('id');
console.log(id)
if (id=='Artem') {
    resultado = `<h1>Artem</h1>`
    document.title = 'Artem';
    document.getElementById('main').innerHTML = resultado
}
